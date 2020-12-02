<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorias;
class CategoriasController extends Controller
{

    public function index()
    {
        $categoria = categorias::all();
        return [
            'categoria'=> $categoria
        ];
    }

    public function store(Request $request)
    {
       $categoria = new categorias();
       $categoria->nombre= $request->nombre;
       $categoria->recomendadas= $request->recomendadas;
       $categoria->genero= $request->genero;
       $categoria->año= $request->año;

       $categoria->save();
    }
    public function update(Request $request)
    {
        $categoria = categorias::findOrFail($request->id_categoria);
        $categoria->nombre= $request->nombre;
        $categoria->recomendadas= $request->recomendadas;
        $categoria->genero= $request->genero;
        $categoria->año= $request->año;
 
        $categoria->save();
    }

    public function destroy(Request $request)
    {
        $categoria = categorias::findOrFail($request->id_categoria);
        
        $categoria->delete();
    }
}
