<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Sytax issue in Laravel 8 - info here - https://www.codermen.com/solved-target-class-controller-does-not-exist/
*/

// All Listings
//Route::get('/', [ListingController::class, 'index']);
Route::get('/', 'App\Http\Controllers\ListingController@index');

// Single Listing
//Route::get('/listings/{listing}', [ListingController::class, 'show']);
Route::get('/listings/{listing}', 'App\Http\Controllers\ListingController@show');