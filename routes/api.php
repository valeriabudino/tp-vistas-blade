<?php
use App\Models\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/provincias', function () {
 return Provincia::all();
});