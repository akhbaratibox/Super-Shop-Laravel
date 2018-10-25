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

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/language', 'languageController@changeLanguage')->name('language.change');
Route::get('/social-login/redirect/{provider}', 'Auth\LoginController@redirectToProvider')->name('social.login');
Route::get('/social-login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('social.callback');

Route::post('/subcategories/get_subcategories_by_category', 'SubCategoryController@get_subcategories_by_category')->name('subcategories.get_subcategories_by_category');
Route::post('/subsubcategories/get_subsubcategories_by_subcategory', 'SubSubCategoryController@get_subsubcategories_by_subcategory')->name('subsubcategories.get_subsubcategories_by_subcategory');
Route::post('/subsubcategories/get_brands_by_subsubcategory', 'SubSubCategoryController@get_brands_by_subsubcategory')->name('subsubcategories.get_brands_by_subsubcategory');
Route::post('/subsubcategories/get_price_variations_by_subsubcategory', 'SubSubCategoryController@get_price_variations_by_subsubcategory')->name('subsubcategories.get_price_variations_by_subsubcategory');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/products/{slug}', 'HomeController@product')->name('product');
Route::post('/products/addtocart', 'ProductController@addToCart')->name('products.addToCart');
Route::post('/products/removeFromCart', 'ProductController@removeFromCart')->name('products.removeFromCart');
Route::post('/products/addToCompare', 'ProductController@addToCompare')->name('products.addToCompare');
Route::get('/users/login', 'HomeController@login')->name('user.login');

Route::group(['middleware' => ['customer']], function(){
	Route::get('/wishlist', 'HomeController@wishlist')->name('wishlist');
	Route::resource('wishlists','WishlistController');
	Route::post('/wishlists/remove', 'WishlistController@remove')->name('wishlists.remove');
});

Route::group(['middleware' => ['seller']], function(){
	Route::get('/seller/product', function(){
		$categories = \App\Category::all();
		return view('frontend.seller_product_upload', compact('categories'));
	});
});

Route::get('/admin', 'HomeController@dashboard')->name('dashboard')->middleware(['auth', 'admin']);
Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){
	Route::resource('categories','CategoryController');
	Route::get('/categories/destroy/{id}', 'CategoryController@destroy')->name('categories.destroy');

	Route::resource('subcategories','SubCategoryController');
	Route::get('/subcategories/destroy/{id}', 'SubCategoryController@destroy')->name('subcategories.destroy');

	Route::resource('subsubcategories','SubSubCategoryController');
	Route::get('/subsubcategories/destroy/{id}', 'SubSubCategoryController@destroy')->name('subsubcategories.destroy');

	Route::resource('brands','BrandController');
	Route::get('/brands/destroy/{id}', 'BrandController@destroy')->name('brands.destroy');

	Route::resource('products','ProductController');
	Route::get('/products/destroy/{id}', 'ProductController@destroy')->name('products.destroy');
	Route::post('/products/todays_deal', 'ProductController@updateTodaysDeal')->name('products.todays_deal');
	Route::post('/products/published', 'ProductController@updatePublished')->name('products.published');
	Route::post('/products/featured', 'ProductController@updateFeatured')->name('products.featured');
	Route::post('/products/get_products_by_subsubcategory', 'ProductController@get_products_by_subsubcategory')->name('products.get_products_by_subsubcategory');

	Route::resource('sellers','SellerController');
	Route::get('/sellers/destroy/{id}', 'SellerController@destroy')->name('sellers.destroy');

	Route::resource('customers','CustomerController');
	Route::get('/customers/destroy/{id}', 'CustomerController@destroy')->name('customers.destroy');

	Route::get('/newsletter', 'NewsletterController@index')->name('newsletters.index');
	Route::post('/newsletter/send', 'NewsletterController@send')->name('newsletters.send');

	Route::resource('messages','ContactMessageController');

	Route::resource('stocks','ProductStockController');
	Route::post('stocks/sku_combinations','ProductStockController@sku_combinations')->name('stocks.sku_combinations');

	Route::post('/business-settings/update', 'BusinessSettingsController@update')->name('business_settings.update');
	Route::get('/activation', 'BusinessSettingsController@activation')->name('activation.index');
	Route::get('/social-login', 'BusinessSettingsController@social_login')->name('social_login.index');
	Route::post('/env_key_update', 'BusinessSettingsController@env_key_update')->name('env_key_update.update');
	Route::get('/currency', 'BusinessSettingsController@currency')->name('currency.index');
    Route::post('/currency/update', 'BusinessSettingsController@updateCurrency')->name('currency.update');
    Route::post('/your-currency/update', 'BusinessSettingsController@updateYourCurrency')->name('your_currency.update');
	Route::get('/verification/form', 'BusinessSettingsController@seller_verification_form')->name('seller_verification_form.index');

	Route::resource('roles','RoleController');
    Route::get('/roles/destroy/{id}', 'RoleController@destroy')->name('roles.destroy');

    Route::resource('staffs','StaffController');
    Route::get('/staffs/destroy/{id}', 'StaffController@destroy')->name('staffs.destroy');
});
