<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Models\Categories;

use function Livewire\Volt\title;

class HomepageController extends Controller
{
    public function index()
{
    $categories = Categories::with('products')->get();
    $title = "Homepage";

    return view('web.homepage', [
        'title' => $title,
        'categories' => $categories
    ]);
}


    public function product()
    {
        $title = "Product";
        return view('web.products', ['title' => $title]);
    }

    public function login()
    {
        return view('web.logiform', [
            'title' => 'Login',
        ]);
    }

    public function register()
    {
        return view('web.register', [
            'title' => 'Register',
        ]);
    }
}
