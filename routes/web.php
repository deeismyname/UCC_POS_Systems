<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrdersController;

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
Route::get("/menu/menu:id",[MenuController::class, 'edit'])->name('update_menu');

Route::get('/inventory', [InventoryController::class,'index']);
Route::post('/inventory',[InventoryController::class, 'store'])->name('inventory');

Route::get('/orders', [OrdersController::class,'index']);
Route::post('/orders',[OrdersController::class, 'store'])->name('orders');

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/about', function () {
    return view('about');
});

require __DIR__.'/auth.php';
