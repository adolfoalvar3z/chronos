<?php

namespace App\Http\Controllers;

use App\Marcaje;
use Illuminate\Http\Request;

class ControlController extends Controller
{
    //
    public function marcaje()
    {
        return view('marcaje');
    }

    public function miMarcaje()
    {
        return view('mismarcas');
    }

    public function marcajeGuardar(Request $request)
    {
        $marcaje = new Marcaje;
        $marcaje->nombre = $request->nombre;
        $marcaje->apellido = $request->apellido;
        $marcaje->fecha = $request->fecha;
        $marcaje->hora = $request->hora;
        $marcaje->save();
        return redirect('/marcaje');
    }

    public function marcajeListar()
    {
        $marcajes = Marcaje::all();
        return view('listar', compact('marcajes'));
    }

    public function marcajeEliminar($id)
    {
        $marcaje = Marcaje::find($id);
        $marcaje->delete();
        return redirect('/marcaje');
    }

    public function marcajeEditar($id)
    {
        $marcaje = Marcaje::find($id);
        return view('editar', compact('marcaje'));
    }

    public function marcajeActualizar(Request $request, $id)
    {
        $marcaje = Marcaje::find($id);
        $marcaje->nombre = $request->nombre;
        $marcaje->apellido = $request->apellido;
        $marcaje->fecha = $request->fecha;
        $marcaje->hora = $request->hora;
        $marcaje->save();
        return redirect('/marcaje');
    }

    public function marcajeBuscar(Request $request)
    {
        $marcajes = Marcaje::where('nombre', 'like', '%' . $request->nombre . '%')->get();
        return view('listar', compact('marcajes'));
    }

    public function marcajeBuscarFecha(Request $request)
    {
        $marcajes = Marcaje::where('fecha', 'like', '%' . $request->fecha . '%')->get();
        return view('listar', compact('marcajes'));
    }

    public function reporte()
    {
        $marcajes = Marcaje::all();
        return view('reporte', compact('marcajes'));
    }

    public function salir()
    {
        return view('login');
    }
}
