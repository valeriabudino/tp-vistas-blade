<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'inicio']);
Route::get('/productos', [SiteController::class, 'productos']);
Route::get('/contacto', [SiteController::class, 'contacto']);
route::get('/nosotros', function () {
    return view('nosotros');
});
