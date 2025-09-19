<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Membro;
use Illuminate\Http\Request;

class membroController extends Controller
{
    public function store(Request $request){
        $membro = Membro::create([
        'nome_completo'=> $request ->nome_completo,
        'endereco'=> $request ->endereco ,
        'telefone'=> $request -> telefone ,
        'data_cadastro'=> $request -> data_cadastro ,
        ]);
        return response()->json($membro);
    }
     public function index (){
        $membro = membro::all();
        return response()->json($membro);
    }
public function update(Request $request) {
        
        $membro = Membro::find($request->id);

     
        if($membro == null){
            return response()->json([
        'erro' => 'Autor não encontrado'
            ]);
        }
        
        if(isset($request->nome_completo)){
           $membro->nome_completo=$request->nome_completo; 
        }
 
        if(isset($request->endereco)){
           $membro->endereco=$request->endereco;
        }
 
        if(isset($request->telefone)){
              $membro->telefone=$request->telefone; 
        }
        if(isset($request->data_cadastro)){
              $membro->data_cadastro=$request->data_cadastro; 
        }
        
        $membro->update();
        return response()->json([
            'mensagem' => 'atualizada'
        ]);
    }
   

    public function show($id)
    {
       
        $membro = membro::find($id);

        
        if ($membro == null) {
            return response()->json([
                'erro' => 'membro não encontrado'

            ]);
        }
      
        return response()->json($membro);
    }


    public function delete($id)
    {

        $membro = Membro::find($id);


        if ($membro == null) {
            return response()->json([
                'erro' => 'membro não encontrado'

            ]);
        } $membro->delete();

        return response()->json([
            'mensagem' =>'excluído'
        ]);
    }
    
}
