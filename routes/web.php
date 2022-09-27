<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('Admin/', [AdminController::class, 'index'])
    ->name('Admin.index');
Route::get('Admin/home/edit-brand/create', [AdminController::class, 'BrandCreate'])
    ->name('Brand.create');
