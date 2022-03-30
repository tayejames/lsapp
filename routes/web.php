<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Route::get('/', 'PagesController@index');

// Route::get('/about', function () {
//     return view('pages.about');
// });


Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'services'])->name('services');

Route::resource('posts', PostsController::class);


Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
