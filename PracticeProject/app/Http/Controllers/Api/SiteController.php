<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SiteController extends Controller
{

    public function indexs(Request $request){

        $formId = $request -> input('formId');
        return DB::table('result')->where('formId',$formId)->get();


    }

    

}
