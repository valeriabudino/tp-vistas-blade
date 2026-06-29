<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PetController;

Route::get('/', [PetController::class, 'index'])->name('pets.index');
Route::get('/productos', [SiteController::class, 'productos']);
Route::get('/contacto', [SiteController::class, 'contacto']);
Route::get('/nosotros', function () { return view('nosotros'); });

Route::get('/mascotas', [PetController::class, 'index']);
Route::get('/mascotas/crear', [PetController::class, 'create'])->name('pets.create');
Route::post('/mascotas', [PetController::class, 'store'])->name('pets.store');