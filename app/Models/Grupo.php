<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table="grupos";
    protected $guarded=['id','created_at','updated_at'];

    
    //relacion uno a muchos inversa
    public function Materia(){
        return $this->belongsTo('App\Models\Materia');
    } 
}
