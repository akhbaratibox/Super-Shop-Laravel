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
Route::get('/users/login', 'HomeController@login')->name('user.login');
Route::post('/users/login', 'HomeController@user_login')->name('user.login.submit');

Route::post('/subcategories/get_subcategories_by_category', 'SubCategoryController@get_subcategories_by_category')->name('subcategories.get_subcategories_by_category');
Route::post('/subsubcategories/get_subsubcategories_by_subcategory', 'SubSubCategoryController@get_subsubcategories_by_subcategory')->name('subsubcategories.get_subsubcategories_by_subcategory');
Route::post('/subsubcategories/get_brands_by_subsubcategory', 'SubSubCategoryController@get_brands_by_subsubcategory')->name('subsubcategories.get_brands_by_subsubcategory');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/product/{slug}', 'HomeController@product')->name('product');
Route::get('/products', 'HomeController@listing')->name('products');
Route::get('/products/category/{id}', 'HomeController@listing_by_category')->name('products.category');
Route::get('/products/subcategory/{id}', 'HomeController@listing_by_subcategory')->name('products.subcategory');
Route::get('/products/subsubcategory/{id}', 'HomeController@listing_by_subsubcategory')->name('products.subsubcategory');
Route::get('/products/brand/{id}', 'HomeController@listing_by_brand')->name('products.brand');
Route::get('/shop/{slug}', 'HomeController@shop')->name('shop.visit');

Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart/nav-cart-items', 'CartController@updateNavCart')->name('cart.nav_cart');
Route::post('/cart/show-cart-modal', 'CartController@showCartModal')->name('cart.showCartModal');
Route::post('/cart/addtocart', 'CartController@addToCart')->name('cart.addToCart');
Route::post('/cart/removeFromCart', 'CartController@removeFromCart')->name('cart.removeFromCart');
Route::post('/cart/updateQuantity', 'CartController@updateQuantity')->name('cart.updateQuantity');

Route::post('/checkout/payment', 'CheckoutController@checkout')->name('payment.checkout');

//Paypal Payment
Route::get('/payment/done', 'PaypalController@getDone')->name('payment.done');
Route::get('/payment/cancel', 'PaypalController@getCancel')->name('payment.cancel');


Route::get('/checkout', 'CheckoutController@get_shipping_info')->name('checkout.shipping_info');
Route::post('/checkout/payment_info', 'CheckoutController@get_payment_info')->name('checkout.payment_info');

Route::get('/compare', 'CompareController@index')->name('compare');
Route::get('/compare/reset', 'CompareController@reset')->name('compare.reset');
Route::post('/compare/addToCompare', 'CompareController@addToCompare')->name('compare.addToCompare');

Route::resource('subscribers','SubscriberController');

Route::resource('orders','OrderController');
Route::get('/orders/destroy/{id}', 'OrderController@destroy')->name('orders.destroy');

Route::group(['middleware' => ['user']], function(){
	Route::resource('wishlists','WishlistController');
	Route::post('/wishlists/remove', 'WishlistController@remove')->name('wishlists.remove');
	Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
	Route::get('/profile', 'HomeController@profile')->name('profile');
	Route::post('/update-profile', 'HomeController@update_profile')->name('profile.update');

	Route::resource('purchase_history','PurchaseHistoryController');
	Route::get('/purchase_history/destroy/{id}', 'PurchaseHistoryController@destroy')->name('purchase_history.destroy');
});

Route::group(['prefix' =>'seller', 'middleware' => ['seller']], function(){
	Route::get('/products', 'HomeController@seller_product_list')->name('seller.products');
	Route::get('/product/upload', 'HomeController@show_product_upload_form')->name('seller.products.upload');
	Route::get('/product/{id}/edit', 'HomeController@show_product_edit_form')->name('seller.products.edit');
	Route::resource('shop', 'ShopController');
});

Route::group(['middleware' => ['auth']], function(){
	Route::post('/products/store/','ProductController@store')->name('products.store');
	Route::post('/products/update/{id}','ProductController@update')->name('products.update');
	Route::get('/products/destroy/{id}', 'ProductController@destroy')->name('products.destroy');
	Route::get('/products/duplicate/{id}', 'ProductController@duplicate')->name('products.duplicate');
	Route::post('/products/sku_combination', 'ProductController@sku_combination')->name('products.sku_combination');
	Route::post('/products/sku_combination_edit', 'ProductController@sku_combination_edit')->name('products.sku_combination_edit');
	Route::post('/products/featured', 'ProductController@updateFeatured')->name('products.featured');
});

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
	Route::get('/currency', 'BusinessSettingsController@currency')->name('currency.index');
    Route::post('/currency/update', 'BusinessSettingsController@updateCurrency')->name('currency.update');
    Route::post('/your-currency/update', 'BusinessSettingsController@updateYourCurrency')->name('your_currency.update');
	Route::get('/verification/form', 'BusinessSettingsController@seller_verification_form')->name('seller_verification_form.index');

	Route::resource('sliders','SliderController');
    Route::get('/sliders/destroy/{id}', 'SliderController@destroy')->name('sliders.destroy');

	Route::resource('roles','RoleController');
    Route::get('/roles/destroy/{id}', 'RoleController@destroy')->name('roles.destroy');

    Route::resource('staffs','StaffController');
    Route::get('/staffs/destroy/{id}', 'StaffController@destroy')->name('staffs.destroy');

	Route::resource('flash_deals','FlashDealController');
    Route::get('/flash_deals/destroy/{id}', 'FlashDealController@destroy')->name('flash_deals.destroy');
	Route::post('/flash_deals/update_status', 'FlashDealController@update_status')->name('flash_deals.update_status');
	Route::post('/flash_deals/product_discount', 'FlashDealController@product_discount')->name('flash_deals.product_discount');
	Route::post('/flash_deals/product_discount_edit', 'FlashDealController@product_discount_edit')->name('flash_deals.product_discount_edit');
});
