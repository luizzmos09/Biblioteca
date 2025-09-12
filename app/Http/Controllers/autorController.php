<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class autorController extends Controller
{
    public function store(Request $request){
        $autor = Autor::create([
        'nome_completo'=> $request ->nome_completo,
        'data_nascimento'=> $request ->data_nascimento ,
        'nacionalidade'=> $request -> nacionalidade ,
        ]);
        return response()->json($autor);
    }
     public function index (){
        $autor = autor::all();
        return response()->json($autor);
    }

    
}
