<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
    use HasFactory;
    protected $table ="tipo_identificacion";
    protected $fillable=["nombre"];

    public function usuarios(){
        return $this->hasMany(User::class);
    }
}
