<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut',
        'dv',
        'nombre',
        'appat',
        'apmat',
        'direccion',
        'numdireccion',
        'bloque',
        'depto',
        'poblacion',
        'comuna',
        'localidad',
        'region',
        'fonoparticular',
        'celular',
        'fonolaboral',
        'estadocivil',
        'jurisdiccion',
        'organica',
        'tipounidad',
        'unidadlaboral',
        'fecnacimiento',
        'institucionprevisional',
        'instituciondesalud',
        'cargo',
        'calidad',
        'estado',
        'tipodocnombramiento',
        'genero',
        'edad',
        'estadoactual',
        'escaladesueldo',
        'asignacionprofesional',
        'profesion',
        'institucionsuperior',
        'seccionadministrativa',
        'emailinstitucional',
        'fecingresoalservicio',
        'fecingresoalaplanta',
        'fecingresoalacategoria',
        'sociobienestar',
        'clasedeplaza',
        'terminoreal',
        'comunaunidad',
        'partida',
        'asientodelaunidad',
        'tipodeplazacontrata',
        'discapacidadvigente',
    ];
}
