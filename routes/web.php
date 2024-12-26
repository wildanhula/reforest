<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\PohonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreeLocationController;



require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('Home');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('pohon', PohonController::class);
});



Route::middleware('auth')->group(function () {
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
    Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::put('/artikel/{id_Artikel}', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('/artikel/{id_Artikel}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
});
Route::middleware('auth')->group(function () {
    // Route untuk halaman pohon dengan kontroler
    Route::get('/pohon', [ArtikelController::class, 'index'])->name('pohon.index');
});


Route::get('/Profile', function () {
    return view('Profile');
});

Route::get('/lokasi', function () {
    return view('lokasi');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Show registration form
Route::get('/register', function () {
    return view('register');
})->name('register');

// Handle registration form submission
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/locations', [TreeLocationController::class, 'index'])->name('locations.index');
Route::post('/locations/store', [TreeLocationController::class, 'store'])->name('locations.store');


Route::resource('faq', FaqController::class);
Route::resource('artikel', ArtikelController::class);
Route::resource('pohon', PohonController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});



