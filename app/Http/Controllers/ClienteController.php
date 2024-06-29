<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index(){
        $cliente = Cliente::orderBy('id', 'desc')->get();
        return view('cliente.listar', ['cliente' => $cliente]);
    }
    public function edit(Cliente $cliente){
        return view('cliente.edit', compact('cliente'));
    }
    public function update(Request $request, Cliente $cliente){
        $cliente->nombre=$request->nombre;
        $cliente->telefono=$request->telefono;
        $cliente->domicilio=$request-> domicilio;
        $cliente->num_social=$request->num_social;
        $cliente->save();
     
        return redirect()->route('cliente.index');
     
      }    

      public function destroy (Cliente $cliente){
           
        $cliente->delete();
        return redirect()->route('cliente.index');
    }

    public function show(Cliente $cliente){


        return view('cliente.show',compact('cliente'));




    }
     public function create(){
        return view('cliente.create');
    }


    public function store(Request $request){
       
        $cliente= new Cliente();
        $cliente->nombre=$request->nombre;
        $cliente->telefono=$request->telefono;
        $cliente->domicilio=$request->domicilio;
        $cliente->num_social=$request->num_social;
        
        
        $cliente->save();
   


    }
    
}
