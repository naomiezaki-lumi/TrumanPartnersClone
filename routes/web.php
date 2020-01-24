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
    return view('home');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/tru-insights', function(){
    return view('tru-insights');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>['auth','admin']], function(){

    // if naay admin page
// Route::get('/admin', function(){
//     return view ('admin.dashboard');
// });

});

// Apply Now Routes
Route::get('/apply-now', function () {
    return view('applynow');
});

// Contact Us Routes //

Route::get('contact-us', 'ContactUsController@ContactUs');
Route::post('contact-us',['as'=>'contactus.store', 'uses' => 'ContactUsController@ContactUsPost']);



