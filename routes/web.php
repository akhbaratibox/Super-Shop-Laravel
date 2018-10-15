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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/{slug}', 'HomeController@product')->name('product');
Route::get('/users/login', 'HomeController@login')->name('user.login');

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/language', 'languageController@changeLanguage')->name('language.change');


Route::get('/admin', 'HomeController@dashboard')->name('dashboard')->middleware(['auth', 'admin']);
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
	Route::get('/products/destroy/{id}', 'ProductController@destroy')->name('products.destroy');
	Route::post('/products/get_products_by_subsubcategory', 'ProductController@get_products_by_subsubcategory')->name('products.get_products_by_subsubcategory');

	Route::resource('sellers','SellerController');
	Route::get('/sellers/destroy/{id}', 'SellerController@destroy')->name('sellers.destroy');

	Route::get('/newsletter', 'NewsletterController@index')->name('newsletters.index');
	Route::post('/newsletter/send', 'NewsletterController@send')->name('newsletters.send');

	Route::resource('messages','ContactMessageController');

	Route::resource('stocks','ProductStockController');
	Route::post('stocks/sku_combinations','ProductStockController@sku_combinations')->name('stocks.sku_combinations');

	Route::get('/activation', 'BusinessSettingsController@activation')->name('activation.index');
	Route::get('/currency', 'BusinessSettingsController@currency')->name('currency.index');
    Route::post('/currency/update', 'BusinessSettingsController@updateCurrency')->name('currency.update');
    Route::post('/your_currency/update', 'BusinessSettingsController@updateYourCurrency')->name('your_currency.update');
	Route::get('/verification/form', 'BusinessSettingsController@seller_verification_form')->name('seller_verification_form.index');

	Route::resource('roles','RoleController');
    Route::get('/roles/destroy/{id}', 'RoleController@destroy')->name('roles.destroy');

    Route::resource('staffs','StaffController');
    Route::get('/staffs/destroy/{id}', 'StaffController@destroy')->name('staffs.destroy');
});
