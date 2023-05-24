<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function Index()
    {
        // $products = Product::all();
        // return view('products', compact('products'));
    }

    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function showAll(){
        $view = $this->product->getAllProducts();
        $view = Product::paginate(8);
        return view('products',['view'=>$view]);
    }
}