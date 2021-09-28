<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/company', function () {
    return view('company/register');
});
Route::get('property/lost', function () {
    return view('property/lost');
});
Route::get( 'found-property',function(){
    return view('submit/found-property');
});
Route::get( 'lost-property',function(){
    return view('submit/found-property');
});

         //Footer Routes
Route::get('about', function () {
    return view('page/about');
});
Route::get('faqs', function () {
    return view('page/faqs');
});
Route::get('privacy', function () {
    return view('page/privacy');
});
Route::get('terms', function () {
    return view('page/terms');
});