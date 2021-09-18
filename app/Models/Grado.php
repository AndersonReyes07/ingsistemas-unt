<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $table='grado';
    protected $primaryKey='idgrado';
    public $timestamps=false;
    protected $protected=[];
    use HasFactory;
}
