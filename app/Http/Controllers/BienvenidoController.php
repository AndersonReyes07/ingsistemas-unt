<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\Docente;
use App\Models\Experiencia;
use App\Models\Horario;
use App\Models\Noticia;
use App\Models\Titulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Caster\ImgStub;


class BienvenidoController extends Controller
{
    //
    public function mostrar(){
        $carreras=Carrera::all();
        $noticias=Noticia::all();
        return view('inicio.bienvenido',compact('carreras','noticias'));
    }

    public function docente(){
        
        $docentes=Docente::all();
        // $experiencias=DB::select(' SELECT d.iddocente,experiencia,ano FROM docentes as d
        // inner JOIN experiencia as e on d.iddocente=e.iddocente');
      
        return view('inicio.docente',compact('docentes'));
        // return $titulos;
    }

    public function horario(){
        $horarios=Horario::all();
        return view('inicio.horario',compact('horarios'));
        
    }

    public function malla(){
        $ciclos=Ciclo::all();
        return view('inicio.malla',compact('ciclos'));

    }
    
    public function plan(){
      
        $ciclos=Ciclo::all();
        return view('inicio.plan',compact('ciclos'));

    }

    public function imprimir(Request $request){

        $book = Horario::find($request->horario);
      
        $pathToFile = public_path()."/$book->horarioH";
        return response()->download($pathToFile);
       
   
    
      
     

    }
}
