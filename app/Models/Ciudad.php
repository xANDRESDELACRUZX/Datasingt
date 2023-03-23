<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table ="ciudades";
    protected $fillable=["nombre","departamentos_id"];

    public function departamentos(){
        return $this->belongsTo(Departamentos::class);
    }

    public function usuarios(){
        return $this->hasMany(User::class);
    }
}
