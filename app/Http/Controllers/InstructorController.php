<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index (){

        $datos = Instructor::all();
        return view('crud.index' , compact('datos'));
    }

    public function show ($datos){

        $datos = Instructor::find($datos);

        return view('crud.show' , compact('datos'));
    }
    
    public function create (){


        return view('crud.create');
    }

    public function store (Request $request){

        $newDatos = new Instructor();

        $newDatos->nombre=$request->nombre;
        $newDatos->dni=$request->dni;
        $newDatos->telefono=$request->telefono;
        $newDatos->direccion=$request->direccion;
        $newDatos->save();

        return "datos enviados con exito";
        return view('crud.create');


    }

    public function edit ($datos){

        $datos = Instructor::find($datos);
        return view('crud.edit', compact('datos'));
    }

    public function update (Request $request, $datos){


        $datos = Instructor::find($datos);

        $datos->nombre=$request->nombre;
        $datos->dni=$request->dni;
        $datos->telefono=$request->telefono;
        $datos->direccion=$request->direccion;
        $datos->save();

        return redirect(route('crud.show', $datos->id));
    }

    public function destroy ($datos){

        $datos = Instructor::find($datos);
        $datos->delete();

        
    }

    
}
