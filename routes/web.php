<?php

use App\Http\Controllers\MenuController;
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
    return view('welcome');
})->middleware(['auth']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/menu', [MenuController::class,'index']);
Route::post('/menu',[MenuController::class, 'store'])->name('menu');

Route::get('/inventory', function () {
    return view('inventory');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/about', function () {
    return view('about');
});

require __DIR__.'/auth.php';
