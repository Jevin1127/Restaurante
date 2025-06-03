<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
    protected $fillable=['NOM1_PERSONA','NOM2_PERSONA','APELLIDO1_PERSONA','APELLIDO2_PERSONA', 'ID_PERSONA', 'TIP_SEXO', 'FEC_NACIMIENTO'];
    public $timestamps = false;
}
