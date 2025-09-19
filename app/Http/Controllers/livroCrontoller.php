<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class livroCrontoller extends Controller
{
    public function store(Request $request){
        $livro = Livro::create([
        'titulo'=> $request ->titulo,
        'ano_publicacao'=> $request ->ano_publicacao ,
        'genero'=> $request -> genero ,
        ]);
        return response()->json($livro);
    }
     public function index (){
        $livro = livro::all();
        return response()->json($livro);
    }
    public function update(Request $request) {
        
        $livro = Livro::find($request->id);

     
        if($livro == null){
            return response()->json([
        'erro' => 'Autor não encontrado'
            ]);
        }
        
        if(isset($request->titulo)){
           $livro->titulo=$request->titulo; 
        }
 
        if(isset($request->data_nascimento)){
           $livro->ano_publicacao=$request->ano_publicacao;
        }
 
        if(isset($request->genero)){
              $livro->genero=$request->genero; 
        }
        
        $livro->update();
        return response()->json([
            'mensagem' => 'atualizada'
        ]);
    }
   

    public function show($id)
    {
       
        $livro = livro::find($id);

        
        if ($livro == null) {
            return response()->json([
                'erro' => 'livro não encontrada'

            ]);
        }
      
        return response()->json($livro);
    }


    public function delete($id)
    {

        $livro = Livro::find($id);


        if ($livro == null) {
            return response()->json([
                'erro' => 'livro não encontrada'

            ]);
        } $livro->delete();

        return response()->json([
            'mensagem' =>'excluído'
        ]);
    }
    
}


