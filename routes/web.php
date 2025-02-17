<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
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

Route::get('/auth/create', [AuthController::class, 'create']);
Route::post('/auth/signUp', [AuthController::class, 'signUp']);
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/signIn', [AuthController::class, 'customLogin']);
Route::get('/auth/logout', [AuthController::class, 'logout']);

Route::resource('article', ArticleController::class)->middleware('auth:sanctum');
// Route::group(['prefix'=>'/article'], function(){
//     Route::get('', [ArticleController::class, 'index']);
//     Route::get('/create', [ArticleController::class, 'create']);
//     Route::get('/store', [ArticleController::class, 'store']);

// });
Route::get('articles/', [ArticleController::class, 'index']);

;
Route::get('/', [Maincontroller::class, 'index']);
Route::get('/gallery/{full_image}', [Maincontroller::class, 'show']);

Route::get('/about', function () {
    return view('main/about');
});

Route::get('/contacts', function () {
    $contacts = [
        'name' => 'Polytech',
        'adress' => 'B.Semenovskaya',
        'phone' => '8 (123) 123-12-12',
        'mail' => '@mospolytech.ru'
    ];
    return view('main/contacts', ['contacts' => $contacts]);
});
