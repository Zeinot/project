<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('villes.index');
});


Route::get('/villes/', [VilleController::class, "index"])->name("villes.index");
Route::get('/villes/create', [VilleController::class, "create"])->name("villes.create");
Route::post('/villes', [VilleController::class, "store"])->name("villes.store");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
