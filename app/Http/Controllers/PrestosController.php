<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prestos;
class PrestosController extends Controller
{
    public function index()
    {
        $prestos= prestos::join('clientes', 'prestamos.id_prestamo','=','clientes.id_cliente', 'peliculas', 'prestamos.id_prestamo', 'peliculas.id_pelicula' )
        ->select('fecha_prestada', 'fecha_devolucion','estado_Pelicula','clientes.num_cedula','clientes.nombres','clientes.apellidos')
        ->select('fecha_prestada', 'fecha_devolucion','estado_Pelicula', 'peliculas.nombre','peliculas.puntuacion', 'peliculas.precio')
        ->orderBy('clientes.nombres', 'asc')
        ->orderBy('peliculas.nombre', 'asc')
        ->get();
        return[
            'prestamo'=>$prestos
        ];
    }
    public function store(Request $request)
    
    {
        $prestos = new prestos();
        $prestos->pres_cliente= $request->pres_cliente;
        $prestos->pres_pelicula= $request->pres_pelicula;
        $prestos->fecha_prestada= $request->fecha_prestada;
        $prestos->fecha_devolucion= $request->fecha_devolucion;
        $prestos->estadoPelicula= $request->estadoPelicula;
 
        $prestos->save();
    }

    public function update(Request $request)
    {
        $prestos = prestos::findOrFail($request->id_prestamo);
        $prestos->pres_cliente= $request->pres_cliente;
        $prestos->pres_pelicula= $request->pres_pelicula;
        $prestos->fecha_prestada= $request->fecha_prestada;
        $prestos->fecha_devolucion= $request->fecha_devolucion;
        $prestos->estadoPelicula= $request->estadoPelicula;
 
        $prestos->save();
    }

    public function destroy(Request $request)
    {
        $prestos = prestos::findOrFail($request->id_prestamo);
        
        $prestos->delete();
    }
}
