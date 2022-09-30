<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');


Route::get('Admin/', [AdminController::class, 'index'])
    ->name('Admin.index');

    // BRAND PARTNERS SECTION

Route::get('Admin/home/edit-brand/create', [AdminController::class, 'BrandCreate'])
    ->name('Brand.create');
Route::post('Admin/home/edit-brand/stored', [AdminController::class, 'BrandStore'])
    ->name('Brand.store');
Route::get('Admin/home/edit-brand/edit/{id}', [AdminController::class, 'BrandEdit'])
    ->name('Brand.edit');
Route::put('Admin/home/edit-brand/edit/{id}/update/', [AdminController::class, 'BrandUpdate'])
    ->name('Brand.update');
Route::delete('Admin/home/edit-brand/delete/{id}', [AdminController::class, 'BrandDelete'])
    ->name('Brand.delete');

    //  CONTACT DETAILS SECTION

Route::get('Admin/home/edit-contact/create', [AdminController::class, 'ContactCreate'])
    ->name('Contact.create');

