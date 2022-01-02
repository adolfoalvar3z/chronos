@php
    setlocale(LC_ALL, 'es_CL', 'es', 'ES', 'es_CL.utf8');
        const Nombre = "Adolfo Álvarez";
        $marcaje = 0;
        //header("Refresh:30");
@endphp
@extends('layouts.app')
@section('title', 'REGISTRA TU MARCA')
@section('content')
    <h3 class="title-5 m-b-35">{{strftime("%A, %d de %B de %Y")}}</h3>
    <div class="card">
        <div class="card-body">
            <p>
            @switch ($marcaje)
                @case(1)
                <h3 class="text-center p-b-10">RECUERDA REGISTRAR TU MARCAJE DE SALIDA<img

                        src="images/online-red-icon.png" alt="" srcset=""></h3></p>
                <div class="rojo"
                     id="contenedor_reloj">{{now('America/Santiago')->format('H:i')}}</div>
                <button type="button" class="btn btn-danger btn-lg btn-block">Registrar
                    Salida
                </button>

                @break
                @case(2)
                <h3 class="text-center p-b-10">HAS REGISTRADO TU MARCAJE DE ENTRADA Y
                    SALIDA,GRACIAS
                    <img src="images/blue-clock-icon.png" alt="" srcset="">
                </h3>
                </p>
                <div class="azul"
                     id="contenedor_reloj">{{now('America/Santiago')->format('H:i')}}</div>
                <button type="button" class="btn btn-primary btn-lg btn-block">Cerrar Sesión
                </button>
                @break

                @default
                <h3 class="text-center p-b-10">NO TIENES MARCAJE REGISTRADO EL DÍA DE
                    HOY<img

                        src="images/online-icon.png" alt="" srcset=""></h3></p>
                <div class="verde"
                     id="contenedor_reloj">{{now('America/Santiago')->format('H:i')}}</div>
                <button type="button" class="btn btn-success btn-lg btn-block">Registrar
                    Ingreso
                </button>

            @endswitch
        </div>
    </div>
@endsection
