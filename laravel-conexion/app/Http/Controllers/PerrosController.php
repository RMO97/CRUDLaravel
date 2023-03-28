<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perros;

class PerrosController extends Controller
{
    public function store(Request $request)
    {
        $perro = new Perros;
        $perro->raza = $request->raza;
        $perro->color = $request->color;
        $perro->Edad = $request->Edad;

        $perro->save();

        return redirect()->route('mostrar-perros');
    }
    public function index()
    {
        $lomitos = Perros::all();
        return view('lomitos', ['lomitos'=>$lomitos]);
    }

    public function edit($id)
    {
        $perro = Perros::find($id);

        return view('ver-lomito', ['lomito'=>$perro]);
    }

    public function delete($id){
        $perro = Perros::find($id);
        $perro->delete();

        return redirect()->route('mostrar-perros');

    }

    public function update($id, Request $request)
    {
        $perro = Perros::find($id);
        $perro->raza = $request->raza;
        $perro->color = $request->color;
        $perro->Edad = $request->Edad;

        $perro->save();
        return redirect()->route('mostrar-perros');

    }

}
