<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Docente;
use App\Models\Experiencia;
use App\Models\Grado;
use App\Models\Titulo;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class AdministradorController extends Controller
{
  
    public function identificacion(Request $request){
     
        // $de="";
        // $usuarios[0]->name;
        // $de=Crypt::decryptString($usuarios[0]->password) ;
        $data=request()->validate([
            'name'=>'required',
            'password'=>'required'
            ],
            [
            'name.required'=>'Ingrese Usuario',
            'password.required'=>'Ingrese contraseña',
            ]);
            if (Auth::attempt($data))
            {
            $con='OK';
            }
            $name=$request->get('name');
            $query=Usuario::where('name','=',$name)->get();
            if ($query->count()!=0)
            {//1llave
            $hashp=$query[0]->password;
            $password=$request->get('password');
            if (password_verify($password, $hashp))
            {//2llave
            return view('admin.index',compact('name'));
            }//termina2llave
            else
            {//encaso2llavenocumpla
            return back()->withErrors(['password'=>'Contraseña no válida'])->withInput(request(['name', 'password']));
            }//termina1llave
            }
            else
            {//Encaso1llavenocumpla
            return back()->withErrors(['name'=>'Usuario no válido'])
            ->withInput(request(['name']));
            }

    }

    public function index(){
        $usuario=Usuario::all();
        $name=$usuario[0]->name;
        return view('admin.index',compact('name'));

    }

    public function edit($id){
        $docente=Docente::find($id);
        $usuario=Usuario::all();
        $name=$usuario[0]->name;
        $carreras= Carrera::all();
        $grados= Grado::all();
        return view('admin.edit',compact('docente','carreras','grados','name'));
    }

    public function update($id,Request $request){
        $usuario=Usuario::all();
        $docente = Docente::find($id);
        $name=$usuario[0]->name;
        $titulo= Titulo::find($docente->titulos[0]->idtitulo);
        $experiencia= Experiencia::find($docente->experiencias[0]->idexperiencia);
         $docente->nombre=$request->nombre;
         $docente->apellidos=$request->apellido;
         $docente->save();
         $titulo->iddocente1=$docente->iddocente;
         $titulo->idcarrera=$request->carrera;
         $titulo->idgrado=$request->grado;
         $titulo->ano=$request->ano;
         $titulo->save();
         $experiencia->iddocente=$docente->iddocente;
         $experiencia->experiencia=$request->experiencia;
         $experiencia->ano=$request->anoEx;
         $experiencia->save();

         return redirect()->route('registro')->with('datos','Registro Editado..!');
     
    }

    public function create(){
        $usuario=Usuario::all();
        $name=$usuario[0]->name;
        $carreras= Carrera::all();
        $grados= Grado::all();
        return view('admin.create',compact('carreras','grados','name'));
    }

    public function store(Request $request){
        $usuario=Usuario::all();
        $name=$usuario[0]->name;
        $titulo= new Titulo();
        $docente = new Docente();
    
        $docente->nombre=$request->nombre;
        $docente->apellidos=$request->apellido;
        $docente->imagen="/img/docente.png";
        $docente->save();
        $titulo->iddocente1=$docente->iddocente;
        $titulo->idcarrera=$request->carrera;
        $titulo->idgrado=$request->grado;
        $titulo->ano=$request->ano;
        $titulo->save();
       

        return redirect()->route('Admin.index')->with('datos','Registro Guardado...!');


    }
    public function destroy($id){
      
        Docente::find($id)->experiencias()->delete();
        Docente::find($id)->titulos()->delete();
        Docente::find($id)->delete();
          return redirect()->route('registro')->with('eliminar','Docente eliminado.....!');
            
    }

    public function salir(){

        return redirect()->route('inicio')->with('datos','Sesión Cerrada...');
        
    }

    public function registro(){
        $usuario=Usuario::all();
        $name=$usuario[0]->name;
        $docentes=Docente::all();

        return view('admin.registro',compact('docentes','name'));
    }



}
