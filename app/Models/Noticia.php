<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table='noticia';
    protected $primaryKey='idnoticia';
    public $timestamps=false;
    protected $protected=[];
    use HasFactory;
}
