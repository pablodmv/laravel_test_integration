<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imgLocation;
use App\Enums\ImgLocationEnum;

class ImgLocationController extends Controller
{

    public function index()
    {
        return view('welcome');
        }


    public function create()
    {
       // $imgLocationEnum = collect((new \ReflectionClass(ImgLocationEnum::class))->getConstants()); 
       $imgLocationEnum = "hola";
        return view('img_location.create', compact('imgLocationEnum'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'location' => ImgLocationEnum::PORTADA1,
        //     'url' => 'required|url',
        //     'description' => 'required|string',
        //     'category' => 'required|string',
        //     'tags' => 'required|string',
        // ]);

        imgLocation::create([
            'location' => $request->location,
            'url' => $request->url,
            'description' => $request->description,
            'category' => $request->category,
            'tags' => $request->tags,
        ]);

        return redirect()->route('index')->with('success', 'Registro agregado correctamente.');
    }
}
