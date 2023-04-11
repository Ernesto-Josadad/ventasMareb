<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mascota;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $mascotas=Mascota::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mascota=new Mascota();
        $mascota->mascotas_id=$request->get('mascotas_id');
        $mascota->nombre=$request->get('nombre');
        $mascota->edad=$request->get('edad');
        $mascota->peso=$request->get('peso');
        $mascota->genero=$request->get('genero');

        $mascota->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $mascota=Mascota::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mascota=Mascota::find($id);

        $mascota->nombre=$request->get('nombre');
        $mascota->edad=$request->get('edad');
        $mascota->peso=$request->get('peso');
        $mascota->genero=$request->get('genero');

        $mascota->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mascota=Mascota::find($id);
        $mascota->delete();
    }
}
