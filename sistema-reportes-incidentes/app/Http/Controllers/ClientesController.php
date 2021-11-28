<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // SELECT * FROM clientes;
        //$clientes = DB::select('SELECT * FROM clientes;');

        //if ($request->has('razonsocial'))...

        $razonSocialBuscada = $request->get('razonsocial');
        $cuitBuscado = $request->get('cuit');

        $clientes = DB::table('clientes')
            ->where('razon_social', 'like', "%{$razonSocialBuscada}%") // Comillas DOBLES para el {$variable}
            ->orWhere('cuit', 'like', "%{$cuitBuscado}%")
            ->get();
        $parametros = [
            'clientes' => $clientes,
            'titulo' => 'Listado de Clientes'
        ];
        return view('clientes', $parametros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear_cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'razon_social' => 'required',
            'cuit'=>'required | numeric'
        ]);

        $razonSocial = $request->post('razon_social');
        $cuit = $request->post('cuit');

        DB::insert('insert into clientes (razon_social, cuit) values (?, ?)',
            [$razonSocial, $cuit]);
        return response()->redirectTo('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = DB::table('clientes')
            ->where('id',"=", $id)
            ->first();

        return view('mostrar_clientes', ['$cliente' => $cliente]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
