<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Cliente;

class controllCliente extends Controller
{
    function insert(Request $request){
        $clienteRequest = $request->input('cliente');
        $cliente = new Cliente();
        $cliente->nome = $clienteRequest['nome'];
        $cliente->email = $clienteRequest['email'];
        $cliente->telemovel = $clienteRequest['telemovel'];
        $cliente->descricao = $clienteRequest['desc'];

        try{
            $result = $cliente->save();
            return response()->json($result);
        } catch(Exception $e)
        {
            return response()->json(false);
        }
    } 

    public function searchAll()
    {
        $clientes = Cliente::all();
        if(count($clientes)>0)
        {
            return response()->json($clientes);
        }else
        {
            return response()->json(false);
        }
    }
}
