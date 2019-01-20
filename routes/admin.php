<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', 'HomeController@admin_dashboard')->name('admin.dashboard')->middleware(['auth', 'admin']);
Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){
	Route::resource('categories','CategoryController');
	Route::get('/categories/destroy/{id}', 'CategoryController@destroy')->name('categories.destroy');
	Route::post('/categories/featured', 'CategoryController@updateFeatured')->name('categories.featured');

	Route::resource('subcategories','SubCategoryController');
	Route::get('/subcategories/destroy/{id}', 'SubCategoryController@destroy')->name('subcategories.destroy');

	Route::resource('subsubcategories','SubSubCategoryController');
	Route::get('/subsubcategories/destroy/{id}', 'SubSubCategoryController@destroy')->name('subsubcategories.destroy');

	Route::resource('brands','BrandController');
	Route::get('/brands/destroy/{id}', 'BrandController@destroy')->name('brands.destroy');

	Route::get('/products','ProductController@index')->name('products.index');
	Route::get('/products/create','ProductController@create')->name('products.create');
	Route::get('/products/{id}/edit','ProductController@edit')->name('products.edit');
	Route::post('/products/todays_deal', 'ProductController@updateTodaysDeal')->name('products.todays_deal');
	Route::post('/products/published', 'ProductController@updatePublished')->name('products.published');
	Route::post('/products/get_products_by_subsubcategory', 'ProductController@get_products_by_subsubcategory')->name('products.get_products_by_subsubcategory');

	Route::resource('sellers','SellerController');
	Route::get('/sellers/destroy/{id}', 'SellerController@destroy')->name('sellers.destroy');

	Route::resource('customers','CustomerController');
	Route::get('/customers/destroy/{id}', 'CustomerController@destroy')->name('customers.destroy');

	Route::get('/newsletter', 'NewsletterController@index')->name('newsletters.index');
	Route::post('/newsletter/send', 'NewsletterController@send')->name('newsletters.send');

	Route::resource('messages','ContactMessageController');

	Route::post('/business-settings/update', 'BusinessSettingsController@update')->name('business_settings.update');
	Route::post('/business-settings/update/activation', 'BusinessSettingsController@updateActivationSettings')->name('business_settings.update.activation');
	Route::get('/activation', 'BusinessSettingsController@activation')->name('activation.index');
	Route::get('/payment-method', 'BusinessSettingsController@payment_method')->name('payment_method.index');
	Route::get('/social-login', 'BusinessSettingsController@social_login')->name('social_login.index');
	Route::post('/env_key_update', 'BusinessSettingsController@env_key_update')->name('env_key_update.update');
	Route::post('/payment_method_update', 'BusinessSettingsController@payment_method_update')->name('payment_method.update');
	Route::get('/currency', 'BusinessSettingsController@currency')->name('currency.index');
    Route::post('/currency/update', 'BusinessSettingsController@updateCurrency')->name('currency.update');
    Route::post('/your-currency/update', 'BusinessSettingsController@updateYourCurrency')->name('your_currency.update');
	Route::get('/verification/form', 'BusinessSettingsController@seller_verification_form')->name('seller_verification_form.index');

	Route::resource('/languages', 'LanguageController');
	Route::get('/languages/destroy/{id}', 'LanguageController@destroy')->name('languages.destroy');
	Route::post('/languages/key_value_store', 'LanguageController@key_value_store')->name('languages.key_value_store');

	Route::get('/frontend_settings/home', 'HomeController@home_settings')->name('home_settings.index');

	Route::group(['prefix' => 'frontend_settings'], function(){
		Route::resource('sliders','SliderController');
	    Route::get('/sliders/destroy/{id}', 'SliderController@destroy')->name('sliders.destroy');

		Route::resource('home_banners','BannerController');
	    Route::get('/home_banners/destroy/{id}', 'BannerController@destroy')->name('home_banners.destroy');

		Route::resource('home_categories','HomeCategoryController');
	    Route::get('/home_categories/destroy/{id}', 'HomeCategoryController@destroy')->name('home_categories.destroy');
		Route::post('/home_categories/update_status', 'HomeCategoryController@update_status')->name('home_categories.update_status');
		Route::post('/home_categories/get_subsubcategories_by_category', 'HomeCategoryController@getSubSubCategories')->name('home_categories.get_subsubcategories_by_category');
	});

	Route::resource('roles','RoleController');
    Route::get('/roles/destroy/{id}', 'RoleController@destroy')->name('roles.destroy');

    Route::resource('staffs','StaffController');
    Route::get('/staffs/destroy/{id}', 'StaffController@destroy')->name('staffs.destroy');

	Route::resource('flash_deals','FlashDealController');
    Route::get('/flash_deals/destroy/{id}', 'FlashDealController@destroy')->name('flash_deals.destroy');
	Route::post('/flash_deals/update_status', 'FlashDealController@update_status')->name('flash_deals.update_status');
	Route::post('/flash_deals/product_discount', 'FlashDealController@product_discount')->name('flash_deals.product_discount');
	Route::post('/flash_deals/product_discount_edit', 'FlashDealController@product_discount_edit')->name('flash_deals.product_discount_edit');

	Route::get('/orders', 'OrderController@admin_orders')->name('orders.index.admin');
	Route::get('/sales', 'OrderController@sales')->name('sales.index');
});
