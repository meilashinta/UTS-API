<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(){
        $products = $this->productService->getAllProducts();
        return view('products.index', compact('products'));
    }

    public function detail($id){
        $product = $this->productService->getProductDetail($id);
        return view('products.detail', compact('product'));
    }
}
