<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Routing\Router;
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

Route::prefix('admin')->group(function () {
    Route::get('user/form-send-mail', [UserController::class, 'formSendUserProfile'])->name('formSendMail');
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::post('testmail', [UserController::class, 'formSendMail'])->name('testmail');
});
Route::prefix('user')->group(function () {
    Route::get('login', [LoginController::class, 'index']);
    Route::post('login/store', [LoginController::class, 'store'])->name('login');
    Route::get('login/store', function(){
        return 'Đăng nhập thành công';
    })->name('logged');
    Route::get('register', [RegisterController::class, 'index']);
    Route::post('register/store', [RegisterController::class, 'store'])->name('reg');
    Route::get('register/store', function(){
        return 'Đăng ký thành công. Hãy kiểm tra email để xác minh tài khoản của bạn';
    })->name('regged');
});