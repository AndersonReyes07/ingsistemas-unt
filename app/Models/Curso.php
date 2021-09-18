<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='curso';
    protected $primaryKey='idcurso';
    public $timestamps=false;
    protected $protected=[];
    use HasFactory;
    public function ciclo(){
        return $this->hasOne(Ciclo::class,'idciclo','idciclo2');
    
    }

}
