<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;
use App\Models\Imagen;
use App\Models\Menu;
use App\Models\Horario;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ciudad = "";
        $nombre = "";

        $info = [
            'nombre' => $nombre,
            'ciudad' => $ciudad,
        ];

        return view('public/home', $info);
    }


    public function busqueda(Request $request)
    {
        $ciudad = $request->get('ciudad');
        $nombre = $request->get('nombre');
        $restaurantes = [];

        if ($ciudad && $nombre)
            $restaurantes =  Restaurante::orWhere('nombre', 'LIKE', "%$nombre%")->orWhere('ciudad', 'LIKE', "%$ciudad%")->get();
        else if ($ciudad && !$nombre)
            $restaurantes =  Restaurante::where('ciudad', 'LIKE', "%$ciudad%")->get();
        else if (!$ciudad && $nombre)
            $restaurantes =  Restaurante::where('nombre', 'LIKE', "%$nombre%")->get();


        $imagenes = [];

        foreach ($restaurantes as $restaurante) {
            $aux = Imagen::where('restaurante_id', '=', $restaurante->id)->take(1)->get();
            array_push($imagenes, $aux[0]->urlImg);
        }

        //$resturantes =  Restaurante::all();

        $info = [
            'restaurantes' =>  $restaurantes,
            'ciudad' => $ciudad,
            'nombre' => $nombre,
            'imagenes' => $imagenes,
        ];

        return view('public/buscar', $info);
    }

    public function restaurante(Request $request, $id)
    {
        $restaurante = Restaurante::find($id);
        $menus = Menu::where('restaurante_id', '=', $id)->get();
        $horario = Horario::where('restaurante_id', '=', $id)->take(1)->get();
        $imagenes = Imagen::where('restaurante_id', '=', $id)->get();

        $info = [
            'restaurante' => $restaurante,
            'menus' => $menus,
            'horario' => $horario[0],
            'imagenes' => $imagenes,
        ];

        return view('public/restaurante', $info);
    }
}
