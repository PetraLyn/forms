<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Zip_Codescontroller extends Controller
{

     function index(){


                 $zip_codes=\App\ZipCode::all();
         return view('zip_codes',['zip_codes'=>$zip_codes]);

     }
      

    
}
