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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/crawler-index', ['uses'=>'CrawlerController@index']);
Route::get('/add-category', ['uses'=>'CategoriesController@createcategory'])->name('add-category');
Route::get('/categories', ['uses'=>'CategoriesController@allcategories'])->name('all-categories');
Route::get('/edit-category/{id}', ['uses'=>'CategoriesController@editcategory'])->name('edit-category');
Route::post('/update-category/{id}', ['uses'=>'CategoriesController@updatecategory'])->name('update-category');
Route::post('/save-category', ['uses'=>'CategoriesController@savecategory'])->name('save-category');
Route::get('/test', ['uses'=>'CategoriesController@test'])->name('test');

Route::get('/all-products', ['uses'=>'ProduitsController@index'])->name('all-products');
Route::get('/product{id}', ['uses'=>'ProduitsController@show'])->name('show-product');


 
//Route::get('/crawler-index', ['uses'=>'CrawlerController@index']);