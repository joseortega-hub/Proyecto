<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;
use App\Models\Imagen;
use App\Models\Menu;
use App\Models\Horario;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /*
        Este metodo lo que hace es coger todos los restaurantes de la base de datos ,
        despues en un array mete las imagenes de este restaurante mediante su campo en la base de datos urlImg
        y devuelve un array que contiene todos los restaurantes de la base de datos
        y el array de imagenes comentado y envia a la vista principal de la pagina pra así al entrar aparezcan todos los restaurantes
        creados y almacenados en la base de datos.
     */
    public function index()
    {
        $ciudad = "";
        $nombre = "";
        $restaurantes = Restaurante::all();
        $imagenes = [];
        foreach ($restaurantes as $restaurante) {
            $aux = Imagen::where('restaurante_id', '=', $restaurante->id)->take(1)->get();
            array_push($imagenes, $aux[0]->urlImg);
        }

        $info = [
            'nombre' => $nombre,
            'ciudad' => $ciudad,
            'restaurantes' => $restaurantes,
            'imagenes' => $imagenes,
        ];

        return view('public/home', $info);
    }


    /*
funcion que recibe los valores de los dos inputs del buscador principal y segun estos valores mostrara
-Los restaurantes que coincidas con el nombre
-Los restaurantes que coincidan con la ciudad
-Los restaurantes que coincidan con el nombre o ciudad
-Ningun restaurante

*/

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


    /*
Este metodo te devuelve el restaurante , recibiendo su id al seleecionarlo y te puede reenviar a dos sitios
-Si estas logueado te enviara a la pagina para editar tu restaurante
-Si no estas logueado te enviara a la pagina basica del restaurante con todos sus datos
    */
    public function restaurante(Request $request, $id)

    {
        $restaurante = Restaurante::find($id);

        if (!Auth::guest()) {

            if (Auth::user()->id == $restaurante->users_id) {
                return redirect('manager/restaurante/' . strval($restaurante->id));
            }
        }

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
