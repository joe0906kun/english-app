<?php

use App\Http\Controllers\English\HomeController;
use App\Http\Controllers\English\FillInTheBlankController;
use App\Http\Controllers\English\WordCardController;
use App\Http\Controllers\English\ReviewController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/fill-in-the-blank', [FillInTheBlankController::class, 'index'])->name('fill-in-the-blank');

Route::get('/word-card', [WordCardController::class, 'index'])->name('word-card');

Route::get('/review', [ReviewController::class, 'index'])->name('review');





//breeze install後
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
