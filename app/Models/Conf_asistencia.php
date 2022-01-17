<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conf_asistencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'horaentrada',
        'horasalida',
        'horaatraso',
        'mantencion',
        //email
        'hostmail',
        'usernamemail',
        'passwordmail',
        'portmail',
        'asuntoemail',
        'nombreenviamail',
        'enviamail',
    ];
}
