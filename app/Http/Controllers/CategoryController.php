<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();

        return view('index.product', compact($categories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        $this->validateCategory();

        $category = new Category(request(['name']));
        $category->save();

        return redirect(route('home'));
    }

    /**
     * @return array
     */
    protected function validateCategory(): array
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }
}
