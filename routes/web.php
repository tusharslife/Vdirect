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



//to show online job portal project introduction 
Route::get('/', function () {
    return view('website');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/login', function () {
    return view('auth.login')->name('login');
});
//checked


Auth::routes();//checked

Route::get('/home', 'HomeController@index')->name('home');

// jobs routes
Route::get('upload', 'JobController@create')->name('job.create');
Route::post('upload', 'JobController@store')->name('job.store');

// {job} is for a slug
Route::get('job/{id}/edit', 'JobController@edit')->name('job.edit');
Route::post('job/{id}/edit', 'JobController@update')->name('job.update');
Route::get('job/{id}/{job}', 'JobController@show')->name('job.show');
Route::get('job/applications', 'JobController@applicant')->name('applicant');
Route::get('job/alljobs', 'JobController@alljobs')->name('alljobs')->middleware('seeker');

/* Route::get('/company/{id}/{company}', 'CompanyController@show')->name('company.show'); */
// user routes
Route::get('payment/success', 'UserviewController@paymentsuccess')->name('paymentsuccess');
Route::get('payment', 'UserviewController@payment')->name('payment');
Route::get('subscription', 'UserviewController@subscribe')->name('subscription');
Route::get('profile', 'UserviewController@index')->name('profile');
Route::get('profile/edit', 'UserController@index')->name('profile.edit');
Route::post('user/profile/create', 'UserController@store')->name('profile.create');
Route::post('user/resume', 'UserController@resume')->name('resume');
Route::post('user/avatar', 'UserController@avatar')->name('avatar');
// company routes
Route::get('company-profile/{id}/{company}', 'CompanyController@show')->name('company.show');
Route::get('company-profile/edit', 'CompanyController@create')->name('company.edit');
Route::post('company/create', 'CompanyController@store')->name('company.store');
Route::post('company/logo', 'CompanyController@logo')->name('company.logo');
// employer routes
Route::view('company', 'auth.company_registration');
Route::post('employer/register', 'EmployerController@register')->name('employer.register');

Route::post('applications/{id}', 'JobController@apply')->name('apply');

