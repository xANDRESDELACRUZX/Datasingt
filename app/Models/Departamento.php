<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table ="departamentos";
    protected $fillable=["nombre"];

    public function ciudades(){
        return $this->hasMany(Ciudades::class);
    }
    public function usuarios(){
        return $this->hasMany(User::class);
    }
}
