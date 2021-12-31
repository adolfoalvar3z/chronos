@php
    setlocale(LC_ALL, 'es_CL', 'es', 'ES', 'es_CL.utf8');
        const Nombre = "Adolfo Álvarez";
        $marcaje = 0;
        //header("Refresh:30");
@endphp
@extends('layouts.app')
@section('title', 'REGISTRA TU MARCA')
@section('content')
    <div class="table-responsive table--no-card m-b-30">
        <table id="example" class="display table table-borderless table-striped table-earning" style="width:100%">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Unidad</th>
                <th>Fecha</th>
                <th>Hora de entrada</th>
                <th>Hora de salida date</th>
                <th>Salary</th>
            </tr>
            </thead>
            <tbody>
            @foreach($marcas as $marca)
                <tr>
                    <td>{{$marca->nombre}}</td>
                    <td>{{$marca->unidad}}</td>
                    <td>{{$marca->fecha}}</td>
                    <td>{{$marca->hora_entrada}}</td>
                    <td>{{$marca->hora_salida}}</td>
                    <td>{{$marca->salary}}</td>
                </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
