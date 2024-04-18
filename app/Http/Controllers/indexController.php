<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imgLocation;

class indexController extends Controller
{
    
    public function index(){
        $texto = "Hola Mundo";
        $imgLocation = imgLocation::where('location', 'Portada1')->first();
        return view('welcome', compact('imgLocation'));
    }

}
