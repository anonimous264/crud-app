<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practica;

class PracticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['practicas']=Practica::orderBy('id','asc')->paginate(6);
        return view('practicas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('practicas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'description' =>'required',
            'state' =>'required',
            'register_date' =>'required',
            'finished_date' =>'required',
            'change_date' =>'required'
        ]);
        $practica =new Practica;
        $practica->name = $request-> name;
        $practica->description = $request-> description;
        $practica->state = $request->state;
        $practica->register_date = $request->register_date;
        $practica->finished_date = $request->finished_date;
        $practica->change_date = $request->change_date;
        $practica->save();
        return redirect()->route('practicas.index')->with('Exito','Se ha creado los datos exitosamente :)');
        //echo($request->name);
    }

    public function show(Practica $practica )
    {
        return view('practicas.show', compact('practica'));
    }

    public function edit(Practica $practica )
    {
        //return view('practicas.edit', compact('practica'));
        return view('practicas.edit', compact('practica'));
    }
    public function text(){
        return view('practicas.text');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required',
            'description' =>'required',
            'state' =>'required',
            'register_date' =>'required',
            'finished_date' =>'required',
            'change_date' =>'required'
        ]);
        $practica =Practica::find($id);
        $practica->name = $request-> name;
        $practica->description = $request-> description;
        $practica->state = $request->state;
        $practica->register_date = $request->register_date;
        $practica->finished_date = $request->finished_date;
        $practica->change_date = $request->change_date;
        $practica->save();
        return redirect()->route('practicas.index')->with('Exito','Se ha actualizado los datos exitosamente :)');
    }

    public function destroy(Practica $practica)
    {
        $practica->delete();
        return redirect()->route('practicas.index')->with('Exito','Se ha eliminado exitosamente');
    }
}
