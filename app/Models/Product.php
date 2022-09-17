<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['dispositivo', 'n/serie', 'marca', 'modelo', 'departamento', 'asignado_a',
'ubicacion', 'responsable_final', 'estatus', 'ip', 'hostname', 'observaciones'];

}

