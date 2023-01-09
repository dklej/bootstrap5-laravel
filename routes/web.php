<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/test', function () {
//     return view('test');
// });

Route::get('/', [App\Http\Controllers\Controller::class, 'sendJsonData']) ;
Route::get('/test', [App\Http\Controllers\Controller::class, 'itemView']) ;

Route::resource('item', ItemController::class);
