<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Binafy\LaravelCart\Cartable;

class Product extends Model
{
    use HasFactory;


    protected $table = 'product';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'category_id',
        'image',
    ];



    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
    public function getPrice(): float
    {
        return $this->price;
    }
}
