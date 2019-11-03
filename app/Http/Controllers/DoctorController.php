<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    // public function show($id){
    // 	$product = Product::find($id);
    // 	$images = $product->images;
    	
    // 	$imagesLeft = collect();
    // 	$imagesRight = collect();
    // 	foreach ($images as $key => $image) {
    // 		if ($key%2==0)
    // 			$imagesLeft->push($image);
    // 		else
    // 			$imagesRight->push($image);
    // 	}
    // 	return view('products.show')->with(compact('product', 'imagesLeft', 'imagesRight'));
    	
    // }
    public function show(){
    	
    	return view('doctor.create');
    	
    }

    // public function create(){//formulario de registro
    //     $categories=Category::orderBy('name')->get();
    // 	return view('admin.products.create')->with(compact('categories'));
    // }

    public function store(Request $request){//registrar el nuevo producto en la bd

        
    	

        $product = new Doctor();// use Product
        $product->name = $request->input('name');
        $product->especialidad = $request->input('Especialidad');
        $product->sexo = $request->input('sexo');
        $product->edad = $request->input('edad');
        $product->description = $request->input('descrip');

        $product->save(); //INsert a la bd

        return redirect('/user');  //para q se diriga a una ruta difeerente

    }

}
