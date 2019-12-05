<?php

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


Route::get('/',function()
{
    return view('quotespage');
});

/*Route::get('/quotes/quotd',function()
{
    return 
});

Route::get('/quotes/random',function()
{
    return 
});

Route::get('/quotes/search',function()
{
    return 
});*/