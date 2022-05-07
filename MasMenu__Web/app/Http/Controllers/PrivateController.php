<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;
use App\Models\Imagen;
use App\Models\Menu;
use App\Models\Horario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class PrivateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(Request $request)
    {
        $restaurantes = [];

        $restaurantes =  Restaurante::where('users_id', '=', Auth::user()->id)->get();

        $imagenes = [];

        foreach ($restaurantes as $restaurante) {
            $aux = Imagen::where('restaurante_id', '=', $restaurante->id)->take(1)->get();
            array_push($imagenes, $aux[0]->urlImg);
        }

        //$resturantes =  Restaurante::all();

        $info = [
            'restaurantes' =>  $restaurantes,
            'imagenes' => $imagenes,
        ];

        return view('private/restaurantes', $info);
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

        return view('private/editarRestaurante', $info);
    }

    public function crearRestaurante(Request $request)
    {
        $newRestaurante = new Restaurante();

        $newRestaurante->nombre =  $request->post('nombre');
        $newRestaurante->ciudad =  $request->post('ciudad');
        $newRestaurante->region =  $request->post('region');
        $newRestaurante->pais =  $request->post('pais');
        $newRestaurante->direccion =  $request->post('direccion');
        $newRestaurante->telefono =  $request->post('telefono');
        $newRestaurante->gmail =  $request->post('email');
        $newRestaurante->users_id = Auth::user()->id;
        $newRestaurante->save();

        $newImagen = new Imagen();
        $newImagen->restaurante_id = $newRestaurante->id;
        $newImagen->urlImg = 'imagen.png';

        $newImagen->save();

        return redirect()->back();
    }
}
