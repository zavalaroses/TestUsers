<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\SuperControlle;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/


Route::view('/','welcome');
Route::view('/dashboard','dashboard')->middleware(['auth'])->name('dashboard');
Route::resource('user',UsersController::class)->middleware('auth');
Route::resource('supervisor',SupervisorController::class)->middleware('auth');
Route::resource('super',SuperControlle::class)->middleware('auth');
require __DIR__.'/auth.php';
