<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class ControladorEmpresa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return Empresa::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//Instanciamos la clase Empresa
        $empresa = new Empresa;
        //Declaramos el nombre con el nombre enviado en el request
        $empresa->nombre = $request->nombre;
		$empresa->numero_trabajadores = $request->numero_trabajadores;
        //Guardamos el cambio en nuestro modelo
        $empresa->save();
		
		return response()->json($empresa, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Solicitamos al modelo la empresa con el id solicitado por GET.
        return Empresa::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		$empresa = Empresa::findOrFail($id);
		$empresa->update($request->all());
		
		return response()->json($empresa, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empresa::find($id)->delete();

		return response()->json(null, 204);
    }
}
