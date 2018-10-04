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

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){
	Route::resource('categories','CategoryController');
	Route::get('/categories/destroy/{id}', 'CategoryController@destroy')->name('categories.destroy');

	Route::resource('subcategories','SubCategoryController');
	Route::get('/subcategories/destroy/{id}', 'SubCategoryController@destroy')->name('subcategories.destroy');
	Route::post('/subcategories/get_subcategories_by_category', 'SubCategoryController@get_subcategories_by_category')->name('subcategories.get_subcategories_by_category');

	Route::resource('subsubcategories','SubSubCategoryController');
	Route::get('/subsubcategories/destroy/{id}', 'SubSubCategoryController@destroy')->name('subsubcategories.destroy');
	Route::post('/subsubcategories/get_subsubcategories_by_subcategory', 'SubSubCategoryController@get_subsubcategories_by_subcategory')->name('subsubcategories.get_subsubcategories_by_subcategory');
	Route::post('/subsubcategories/get_brands_by_subsubcategory', 'SubSubCategoryController@get_brands_by_subsubcategory')->name('subsubcategories.get_brands_by_subsubcategory');
	Route::post('/subsubcategories/get_price_variations_by_subsubcategory', 'SubSubCategoryController@get_price_variations_by_subsubcategory')->name('subsubcategories.get_price_variations_by_subsubcategory');

	Route::resource('brands','BrandController');
	Route::get('/brands/destroy/{id}', 'BrandController@destroy')->name('brands.destroy');
	
	Route::resource('products','ProductController');
});

