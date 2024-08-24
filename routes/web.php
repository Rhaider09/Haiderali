<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;

Route::get('/', [HomeController::class, 'index']);

Route::resource('/admin', AdminController::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('user', CustomerController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('project', ProjectController::class);
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
require __DIR__ . '/auth.php';


Route::get('/home', [HomeController::class, 'index']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('service-detail/{id}', [HomeController::class, 'serviceDetail'])->name('servicesDetail');
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('project-detail/{id}', [HomeController::class, 'projectDetail'])->name('projectDetail');
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/store', [HomeController::class, 'store'])->name('customer.store');
Route::get('cv', [HomeController::class, 'downloadcv']);
Route::post('newsletter', [CustomerController::class, 'newsletter'])->name('newsletter');
