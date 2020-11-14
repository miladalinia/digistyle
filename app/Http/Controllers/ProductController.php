<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products = Product::paginate(10);
        return view('Admin.products.list', ['products' => $products]);
    }
}
