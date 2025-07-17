<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
Route::get('/password', function () {
    return view('password');
})->name('password');

Route::get('/mfa', function () {
    return view('mfa');
})->name('mfa');

Route::get('/stay-signed-in', function () {
    return view('stay-signed-in');
})->name('stay-signed-in');

Route::get('/my/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/earn/advanced-earn', function () {
    return view('advanced-earn');
})->name('advanced-earn');

Route::get('/dual-investment', function () {
    return view('dual-investment');
})->name('dual-investment');


Route::get('/example', function () {
    return view('example');
})->name('example');


require __DIR__.'/auth.php';
