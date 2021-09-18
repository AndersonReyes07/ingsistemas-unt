<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    protected $table='ciclo';
    protected $primaryKey='idciclo';
    public $timestamps=false;
    protected $protected=[];
    use HasFactory;
    public function cursos(){
        return $this->hasMany(Curso::class,'idciclo2','idciclo');
      
    }
}
