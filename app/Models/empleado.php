<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    #use HasFactory;
    protected $table = 'empleado';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre_completo', 'rfc', 'cel', 'correo', 'direccion',
                             'tipo_empleado','created_at'];

}
