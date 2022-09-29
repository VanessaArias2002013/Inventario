<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'razon_social', 'direccion', 'correo', 'web', 'tel',
'ext', 'celular', 'tipo_servicio', 'notas'];


}
