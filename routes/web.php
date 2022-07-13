<?php
use Illuminate\Http\Request;
use App\Http\Controllers\CreateUserController;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('/user/create', [CreateUserController::class, 'index']);
    Route::post('/user/create', [CreateUserController::class, 'validationForm']);
    Route::get('/user', function () {
        return view('admin.user');
    });
});