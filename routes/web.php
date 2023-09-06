<?php

use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
        'auth',
        'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
             return view('dashboard');
        })->name('dashboard');


        Route::resource('dashboard/users', UserController::class);

        Route::resource('dashboard/schedules', ScheduleController::class);

        Route::resource('dashboard/classes', ScheduleController::class);
    });

Route::middleware('auth')->group(function () {

    Route::get('/user', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
