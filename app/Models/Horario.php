<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table='horario';
    protected $primaryKey='idhorario';
    public $timestamps=false;
    protected $protected=[];
    use HasFactory;
    public function ciclo(){
        return $this->hasOne(Ciclo::class,'idciclo','idciclo1');
    }
    public function carrera(){
        return $this->hasOne(Carrera::class,'idcarrera','idcarrera1');
    }
}
