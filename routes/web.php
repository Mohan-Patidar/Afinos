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

Route::get('/', 'FrontEndController@index');
Route::get('/features', 'FrontEndController@features');
Route::get('/pricing', 'FrontEndController@pricing');
Route::get('/customers', 'FrontEndController@customers');
Route::get('/why', 'FrontEndController@why');
Route::get('/checkout/{id}', 'FrontEndController@checkout');
Route::post('/verify-email', 'FrontEndController@verifyEmail');
Route::post('/continue-checkout', 'FrontEndController@continueCheckOut');
Route::get('/payment', 'FrontEndController@payment');
Route::any('/process-payment', 'FrontEndController@processPayment');
Route::get("/order-placed/{id}", 'FrontEndController@orderPlaced');
Route::post("/checkout-login", 'FrontEndController@login');

// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles','RoleController');
//     Route::resource('users','UserController');
//     Route::resource('products','ProductController');
// });

Auth::routes();
Route::group(['middleware' => ['auth', 'disablepreventback']], function () {
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/sections','SectionController');
    Route::resource('/pages','PageController');
    Route::resource('/profile','ProfileController');
    Route::post("profileavtar", "ProfileController@avatar")->name("profileavtar");
    Route::post("updatepassword", "ProfileController@updatePassword")->name("updatepassword");
    Route::resource('/packages', PackagesController::class);
    Route::resource('/recurrances', RecurrencesController::class);
    Route::resource('/addons', AddonsController::class);
    Route::get("/users", "ProfileController@allUsers")->name('allusers');
    Route::get("/all-orders", "OrderController@index")->name('allorders');
    Route::get("/view-order/{id}", "OrderController@view")->name('vieworder');
    Route::get("/active-subscriptions", "OrderController@activeSubscriptions")->name("activesubscription");
});


//routes on frontend
// Route::get('/pricing', 'PackagesController@pricingPage');
// Route::get('/processprincing/{id}', 'CheckoutController@processPricing')->name('processprincing');

Route::group(['middleware' => 'disablepreventback'],function(){
	Auth::routes();
	Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});



