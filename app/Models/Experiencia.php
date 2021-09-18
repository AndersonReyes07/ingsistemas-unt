<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $table='experiencia';
    protected $primaryKey='idexperiencia';
    public $timestamps=false;
    protected $protected=[];
    use HasFactory;

    public function docente(){
        return $this->hasOne(Docente::class,'iddocente','iddocente');
     }

}
