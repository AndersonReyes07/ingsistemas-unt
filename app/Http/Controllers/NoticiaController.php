<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Usuario;
use Exception;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario=Usuario::all();
        $name=$usuario[0]->name;
        return view('admin.createN',compact('name'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'titulo'=>'required',
            'contenido'=>'required',
            'ano'=>'required',
            'mes'=>'required',
            'dia'=>'required',
            'archivo'=>'required'
            ],
            [
            'titulo.required'=>'Ingrese el titulo de a noticia',
            'contenido.required'=>'Ingrese el contenido de la noticia',
            'ano.required'=>'Ingrese el año de la noticia',
            'mes.required'=>'Ingrese el mes de la noticia',
            'dia.required'=>'Ingrese el dia de la noticia',
            'archivo.required'=>'Portada de la noticia vacia',
            ]);

        try{

            DB::beginTransaction();
            DB::commit();
            $usuario=Usuario::all();
            $name=$usuario[0]->name;
            $noticia= new Noticia();
            $noticia->titulo=$request->titulo;
            $noticia->contenido=$request->contenido;
            
            $noticia->fecha=$request->ano.'/'.$request->mes.'/'.$request->dia;
            if($request->hasFile('archivo')){
               $archivo=$request->file('archivo');
               $archivo->move(public_path().'/archivo/',$archivo->getClientOriginalName());
               $noticia->imagen=$archivo->getClientOriginalName();
   
            }
            $noticia->save();
            DB::commit();
        }catch(Exception $e){
            DB::rollback();

        }

         return redirect()->route('Admin.index')->with('datos','Noticia Registada......!!!!');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $noticia= Noticia::find($id);
       
       return view('inicio.noticia',compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
