<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/zip_codes', function () {
   return\App\zip_codes::all();
});

    // $Zip_Codes=\App\Zip_Codes::all(){
    // 	return view('zip_codes',['zip_codes'=>$Zip_Codes]);
    // });

Route::get('/zip_codes','Zip_Codescontroller@index');   


