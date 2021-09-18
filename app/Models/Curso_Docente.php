<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso_Docente extends Model
{
    protected $table='curso_docente';
    public $timestamps=false;
    protected $protected=[];
    use HasFactory;
}
