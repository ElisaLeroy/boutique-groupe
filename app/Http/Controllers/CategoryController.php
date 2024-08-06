<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index(){
        $categories = Category::with('products')->get();

        return view('category-list', compact('categories'));
    }
}
