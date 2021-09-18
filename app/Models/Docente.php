<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table='docentes';
    protected $primaryKey='iddocente';
    public $timestamps=false;
    protected $fillable=['nombre','apellidos','imagen'];
    use HasFactory;

    public function experiencias(){
       return $this->hasMany(Experiencia::class,'iddocente','iddocente');
    }
    public function titulos(){
        return $this->hasMany(Titulo::class,'iddocente1','iddocente');
    }
}
