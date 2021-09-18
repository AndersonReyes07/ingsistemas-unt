<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Experiencia;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=Usuario::all();
       
        $name=$usuario[0]->name;
      $experiencias=Experiencia::all();


        return view('admin.experiencia.index',compact('experiencias','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docentes=Docente::all();
        $usuario=Usuario::all();
       
        $name=$usuario[0]->name;

       return view('admin.experiencia.create',compact('docentes','name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $experiencia= new Experiencia();
        $experiencia->experiencia=$request->experiencia;
        $experiencia->iddocente=$request->docente;
        $experiencia->ano=$request->ano;
        $experiencia->save();
        
        return redirect()->route('Experiencia.index')->with('datos','Registro Guardado...!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=Usuario::all();
       
        $name=$usuario[0]->name;
        $experiencia=Experiencia::find($id);
        $docentes=Docente::all();
        

        return view('admin.experiencia.edit',compact('name','docentes','experiencia'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $experiencia= Experiencia::find($id);
        $experiencia->experiencia=$request->experiencia;
        $experiencia->iddocente=$request->docente;
        $experiencia->ano=$request->ano;
        $experiencia->save();


        return redirect()->route('Experiencia.index')->with('datos','Registro Editado!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
        Experiencia::find($id)->delete();
      
          return redirect()->route('Experiencia.index')->with('eliminar','Experiencia eliminado.....!');
    }
}
