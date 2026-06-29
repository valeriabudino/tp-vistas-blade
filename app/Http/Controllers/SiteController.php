<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Provincia;

class SiteController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }
    public function productos()
    {
        $productos = Producto::allLocal();
    
        return view('productos', compact('productos'));
    }
    public function contacto()
    {
        $email = 'contacto@veterinariapatitas.com';
        $provincias = $this->provincias();
        return view('contacto', compact('email', 'provincias'));
    }
      public function provincias()
    {
        $provincias = Provincia::all();
    
        return $provincias;
    }
}