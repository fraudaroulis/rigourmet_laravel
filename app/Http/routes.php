<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as'    =>  'landingPage',
    'uses'  =>  'PagesController@getLandingPage'
]);

// Redirect to facebook to authenticate
Route::get('facebook', 'AccountController@redirectToProvider');
// Get back to redirect url
Route::get('account/facebook', 'AccountController@handleProviderCallback');

Route::get('login/{provider?}', 'Auth\AuthController@login');