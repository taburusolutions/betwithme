<?php

$s = 'public.';
Route::get('/',         ['as' => $s . 'home',   'uses' => 'PagesController@getHome']);
Route::get('/how_it_works',         ['as' => $s . 'how_it_works',   'uses' => 'PagesController@getHowItWorks']);
Route::get('/upcoming_matches',         ['as' => $s . 'upcoming_matches',   'uses' => 'PagesController@getUpcomingMatches']);
Route::get('/completed_matches',         ['as' => $s . 'completed_matches',   'uses' => 'PagesController@getCompletedMatches']);
Route::get('/contact_us',         ['as' => $s . 'contact_us',   'uses' => 'PagesController@getContactUs']);
Route::get('/category/{category}',   ['as' => $s . 'category',   'uses' => 'PagesController@getCategory']);
Route::get('/category/{category}/betid/{betid}',   ['as' => $s . 'bets',   'uses' => 'PagesController@getSingleBet']);


$d = 'dashboard.';
Route::get('/dashboard',         ['as' => $d . 'dashboard',   'uses' => 'PagesController@getDashboard']);
Route::get('/settings',         ['as' => $d . 'settings',   'uses' => 'PagesController@getSettings']);
Route::get('/friends',         ['as' => $d . 'friends',   'uses' => 'PagesController@getFriends']);



$a = 'auth.';
Route::get('/login',            ['as' => $a . 'login',          'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login',           ['as' => $a . 'login-post',     'uses' => 'Auth\AuthController@postLogin']);
Route::get('/register',         ['as' => $a . 'register',       'uses' => 'Auth\AuthController@getRegister']);
Route::post('/register',        ['as' => $a . 'register-post',  'uses' => 'Auth\AuthController@postRegister']);
Route::get('/password',         ['as' => $a . 'password',       'uses' => 'Auth\PasswordResetController@getPasswordReset']);
Route::post('/password',        ['as' => $a . 'password-post',  'uses' => 'Auth\PasswordResetController@postPasswordReset']);
Route::get('/password/{token}', ['as' => $a . 'reset',          'uses' => 'Auth\PasswordResetController@getPasswordResetForm']);
Route::post('/password/{token}',['as' => $a . 'reset-post',     'uses' => 'Auth\PasswordResetController@postPasswordResetForm']);

$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth:administrator'], function()
{
    $a = 'admin.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'AdminController@getHome']);
});

Route::group(['prefix' => 'user', 'middleware' => 'auth:user'], function()
{
    $a = 'user.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'UserController@getHome']);
});

Route::group(['middleware' => 'auth:all'], function()
{
    $a = 'authenticated.';
    Route::get('/logout', ['as' => $a . 'logout', 'uses' => 'Auth\AuthController@getLogout']);
});