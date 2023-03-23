<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table ="usuarios";
    protected $fillable=["pri_nombre","seg_nombre","pri_apellido","seg_apellido","fecha_nacimiento","departamento_id","ciudad_id","tipo_identificacion_id",
    "num_telefono","num_identificacion","email","password","rol_id"];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function rol(){
        return $this->belongsTo(Rol::class);
    }
    public function TipoIdentificacion(){
        return $this->belongsTo(TipoIdentificacion::class);
    }

    public function ciudad(){
        return $this->belongsTo(Ciudad::class);
    }
    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}