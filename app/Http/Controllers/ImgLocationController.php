<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imgLocation;
use App\Enums\ImgLocationEnum;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ImgLocationController extends Controller
{

    public function index()
    {
        return view('welcome');
        }


    public function create()
    {
       // $imgLocationEnum = collect((new \ReflectionClass(ImgLocationEnum::class))->getConstants()); 
       $imgLocationEnum = ImgLocationEnum::PORTADA1;
        return view('img_location.create', compact('imgLocationEnum'));
    }

    public function store(Request $request)
    {
        try {
            // $request->validate([
            //     'location' => ImgLocationEnum::PORTADA1,
            //     'url' => 'required|url',
            //     'description' => 'required|string',
            //     'category' => 'required|string',
            //     'tags' => 'required|string',
            // ]);
           

            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
                ]);
            } else {
                return redirect()->route('img_location.create')->with('error', 'Debe seleccionar una imagen.');
            }
           
             // Get the image file from the request
            $image = $request->file('image');
            $now = date('dmYHis');;
            $filename = $now . '_' . $image->getClientOriginalName();
    
            $imagePath = $request->file('image')->storeAs('public/img', $filename);
            $url = Storage::url($imagePath);
    
            

            imgLocation::create([
                'location' => $request->location,
                'url' => $url,
                'description' => $request->description,
                'category' => $request->category,
                'tags' => $request->tags,
            ]);
           
            return redirect()->back()->with('success', 'Registro agregado correctamente.'. $imagePath);
        } catch (\Exception $e) {
            // Handle the exception here
            return redirect()->route('img_location.create')->with('error', 'Error al agregar el registro.'. $e->getMessage());
        }
    }
}
