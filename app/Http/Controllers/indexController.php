<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    
    public function getImage(){
        return view('welcome');
    }

}
