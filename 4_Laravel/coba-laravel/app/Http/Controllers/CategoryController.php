<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('categories', [
            'title' => 'List Categories',
            'categories' => Category::all()
        ]);
    }

    public function category_post(Category $category){
        return view('category', [
            'title' => 'Category Post',
            'posts' => $category
        ]);
    }
}
