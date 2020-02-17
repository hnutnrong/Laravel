<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
      
      $productName = 'Off-White';

      return view('products.index',[
          'productName' => $productName
        
        ]);
      
       
    }

}
