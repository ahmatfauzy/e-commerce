<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use function pest\Laravel\{actingAs, get};

use App\Models\User;
use App\Models\Categories;
use Illuminate\Support\Str;

// skenario 1
test('admin user can access product categories page', function () {
    $admin = User::factory()->create();
    actingAs($admin)
        ->get('/dashboard/category')
        ->assertStatus(200)
        ->assertSee('Product Categories');
});



// skenario 2
test('admin user can create new product categories', function () {
    $admin = User::factory()->create();
    actingAs($admin)
        ->get('/dashboard/category/create')
        ->assertStatus(200)
        ->assertSee('Category');
    $newCategori = [
        'name' => 'Testing New Category',
        'slug' => Str::slug('testing new-category'),
        'description' => 'This is a new testing category.'
    ];
    actingAs($admin)
        ->post('/dashboard/category', $newCategori)
        ->assertRedirect();
    $latestCategory = Categories::latest('id')->first();

    expect($latestCategory)
        ->name->toBe($newCategori['name'])
        ->slug->toBe($newCategori['slug'])
        ->description->toBe($newCategori['description']);
});



// skenario 3
test('admin user can update product categories', function () {
    $admin = User::factory()->create();
    $category = Categories::factory()->create();
    actingAs($admin)
        ->get('/dashboard/category/' . $category->id . '/edit')
        ->assertStatus(200)
        ->assertSee('Category');
    $updatedCategory = [
        'name' => 'Updated Category Name',
        'slug' => Str::slug('updated-category-name'),
        'description' => 'This is an updated category description.',
        'image' => 'https://picsum.photos/640/480?random=2',
    ];
    actingAs($admin)
        ->put('/dashboard/category/' . $category->id, $updatedCategory)
        ->assertRedirect();
    $category->refresh();
    expect($category)
        ->name->toBe($updatedCategory['name'])
        ->slug->toBe($updatedCategory['slug'])
        ->description->toBe($updatedCategory['description']);
});



// skenario 4

test('admin user can delete product categories', function () {
    $admin = User::factory()->create();
    $category = Categories::factory()->create();

    actingAs($admin)
        ->delete('/dashboard/category/' . $category->id)
        ->assertRedirect();

    expect(Categories::find($category->id))->toBeNull();
});
