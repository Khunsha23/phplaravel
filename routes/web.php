<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;



Route::redirect('/', '/home')->name('dashboard');
Route::resource('books', BookController::class);


Route::middleware(['auth','verified'])->group(function(){
    
Route::get('/home', function () {
    return view('home');
})->name('home');
    
    Route::resource('note',BookController::class);
    
    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';







