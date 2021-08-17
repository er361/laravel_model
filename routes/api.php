<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('createModel',function(){
    $sf = new \App\Sf();
    $sf->firstName = 'ss';
    $sf->lastName = 'ls';
    $sf->save();
    return $sf;
});

Route::get('getModel',function (){
    $sf = \App\Sf::first();
    return [
        'firstName' => $sf->firstName,
        'lastName' => $sf->lastName
    ];
});
