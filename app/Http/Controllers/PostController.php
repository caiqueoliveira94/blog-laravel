<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $category;

    public function __construct(Category $category) {
        $this->category = $category;
    }
    public function criarPost()
    {
        $categories = Category::all();
        return view('pages.posts.create', compact('categories'));
    }
}
