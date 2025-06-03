<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Personas;

class ProductContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //leer datos 
    {
        //
        $personas= Personas::all();
        return view('admin.personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //crear datos
    {
        //

        return view('admin.personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //guardar en las bases 
    {
        $request->validate(
            [
                'NOM1_PERSONA'=>'required',
                'NOM2_PERSONA'=>'required',
                'APELLIDO1_PERSONA'=>'required',
                'APELLIDO2_PERSONA'=>'required',
                'ID_PERSONA'=>'required',
                'TIP_SEXO'=>'required',
                'FEC_NACIMIENTO'=>'required'
            ]
        );
        $persona = Personas::create($request->all());
        return redirect()->route('admin.personas.edit', $persona);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas) //mostrar
    {
        //
        return view('admin.personas.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Personas $personas) //formulario de edicion
    {
        //
        return view('admin.personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personas $personas) //actualizar 
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personas $personas) //borrar los datos
    {
         return view('admin.personas.destroy');
    }
}
