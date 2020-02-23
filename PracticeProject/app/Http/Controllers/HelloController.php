<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function showHello($name){
        return '<h1> Hello : ' . $name . '</h1>';
    }

    public function resultProduct($product){
        return '<h1> Show ' . $product . '</h1>';
    }
}
