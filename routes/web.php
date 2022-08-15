<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PermissionGroupController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->middleware('auth', 'admin')->group(function () {
    Route::get('user/form-send-mail', [UserController::class, 'formSendUserProfile'])->name('formSendMail');
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('permission-group', PermissionGroupController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::post('testmail', [UserController::class, 'formSendMail'])->name('testmail');
});
Auth::routes(['verify' => true]);
Route::get('/', [HomeController::class, 'index'])->name('home');
