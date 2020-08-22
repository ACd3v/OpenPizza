<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store()
    {
        $this->validateProduct();

        $category = request('category_id')[0];
        $name = request('name');

        $product = new Product(['category_id' => $category, 'name' => $name]);
        $product->save();

        return redirect(route('home'));
    }

    protected function validateProduct(): array
    {
        return request()->validate([
            'category_id' => 'required',
            'name' => 'required'
        ]);
    }
}
