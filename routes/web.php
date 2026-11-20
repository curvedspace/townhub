<?php

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/plants', function () {
    return view('plants');
})->middleware(['auth', 'verified'])->name('plants');

Route::get('/orgs/create', [OrganizationController::class, 'create'])
    ->name('organizations.create');

Route::get('/orgs/{organization:id}', [OrganizationController::class, 'show'])
    ->name('organizations.show');


Route::get('/organizations', [OrganizationController::class, 'index']
)->middleware(['auth', 'verified'])->name('organizations.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
