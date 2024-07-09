<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Proyecto;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos= Proyecto::with('cliente')->get();
        return view('proyectos.index',compact('proyectos'));
    }


    public function create()
    {
        $clientes = Cliente::all();
        return view('proyectos.create',compact('clientes'));
    }


    public function store(Request $request)
    {
        Proyecto::create($request->all());
        return redirect()->route('proyectos.index');
    }


    public function show(Proyecto $proyecto)
    {
        return view('proyectos.show',compact('proyecto'));
    }


    public function edit(Proyecto $proyecto)
    {
        $clientes= Cliente::all();
        return view('proyectos.edit',compact('clientes','proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $proyecto->update($request->all());
        return redirect()->route('proyectos.show',$proyecto);
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index');
    }
}
