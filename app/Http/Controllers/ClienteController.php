<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use DateTime;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = $request->filter;
        $clientes = Cliente::all();
        if($filter){
            $clientes = Cliente::where('nome', 'LIKE', "%$filter%")->get();
            $clientes = Cliente::where('email', 'LIKE', "%$filter%")->get();
        }
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $requestAll = $request->all();
        $dateNasc = DateTime::createFromFormat('d/m/Y', $request->data_nasc);
        $newDateNasc = $dateNasc->format('Y-m-d');
        $requestAll['data_nasc'] = $newDateNasc;
        $cliente->create($requestAll);
        return redirect('/clientes');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('cliente.show' ,['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        $cliente->data_nasc = date('d/m/Y', strtotime($cliente->data_nasc));
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $requestAll = $request->all();
        $dateNasc = DateTime::createFromFormat('d/m/Y', $request->data_nasc);
        $newDateNasc = $dateNasc->format('Y-m-d');
        $requestAll['data_nasc'] = $newDateNasc;
        $cliente->update($requestAll);
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect('/clientes');
    }
}
