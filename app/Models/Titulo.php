<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    protected $table='titulo';
    protected $primaryKey='idtitulo';
    public $timestamps=false;
    protected $protected=[];
    use HasFactory;

    public function carrera(){
        return $this->hasOne(Carrera::class,'idcarrera','idcarrera');
  
    }
    public function grado(){
        return $this->hasOne(Grado::class,'idgrado','idgrado');
  
    }
    public function docente(){
        return $this->hasOne(Docente::class,'iddocente','iddocente1');
  
    }

}
