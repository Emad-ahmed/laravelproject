<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('demo');
});


Route::get('/demo/{name}/{id?}', function($name, $id = NULL)
{
   $data = compact("name", "id");
   return view('demo')->with($data);
});

Route::get('/contact', function()
{
    echo "Contact";
});

Route::any('/test', function()
{
    echo "TRoute In The Post";
});