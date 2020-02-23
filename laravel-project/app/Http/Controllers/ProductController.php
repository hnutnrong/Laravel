<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
      
      $products = Product::paginate(15);

      return view('products.index',[
          'products' => $products
        
        ]);
      
       
    }

}
