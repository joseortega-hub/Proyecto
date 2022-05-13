<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;
use App\Models\Imagen;
use App\Models\Menu;
use App\Models\Horario;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PrivateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /*
El middleware proporciona un mecanismo conveniente para   filtrar las solicitudes HTTP.
Yo aprovecho este que  verifica que el usuario esté autenticado
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


    /*
    Metodo que nos devuelve y muestra todos los restaurantes del usuario correspondiente
    mediante su id

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


    /*
Funcion que mediante los ids y las claves ajenas nos devuelve toda la informacion de un restaurante
y sus tablas asociadas y nos las lleva a una pagina para editar esta informacion

    */
    public function restaurante(Request $request, $id)
    {
        $restaurante = Restaurante::find($id);
        $menus = Menu::where('restaurante_id', '=', $id)->get();
        $horario2 = Horario::where('restaurante_id', '=', $id)->take(1)->get();
        $horario = Horario::find($horario2[0]->id);
        $imagenes = Imagen::where('restaurante_id', '=', $id)->get();


        $info = [
            'restaurante' => $restaurante,
            'menus' => $menus,
            'horario' => $horario,
            'imagenes' => $imagenes,
        ];

        return view('private/editarRestaurante', $info);
    }
    /*
Funcion que es llamada por modal con un formulario para crear el restaurante
recibe todos los datos por Post y crea una imagen con el urlImg =  al nombre del file
seleccionado y también mueve esta imagen a la carpeta correspondiente.Como sabemos que
cada restaurante tiene 5 imagenes, las 4 restantes las metemos mediante un for para
mejorar la experiencia del usuario en la parte visual y creamos un horario por defecto

    */

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
        $file = $request->file('imagen');
        $newImagen->restaurante_id = $newRestaurante->id;
        $newImagen->urlImg = $file->getClientOriginalName();
        $request->file('imagen')->move(public_path('/img/restaurante'), $file->getClientOriginalName());
        $newImagen->save();


        for ($i = 0; $i < 4; $i++) {
            $newImagen2 = new Imagen();
            $newImagen2->restaurante_id = $newRestaurante->id;
            $newImagen2->urlImg = 'vacio.jpg';
            $newImagen2->save();
        }

        $newHorario = new Horario();

        $newHorario->lunes_abierto = true;
        $newHorario->lunes_turnos = false;
        $newHorario->lunes_abrir1 = '08:00';
        $newHorario->lunes_cerrar1 = '15:00';
        $newHorario->lunes_abrir2 = '17:00';
        $newHorario->lunes_cerrar2 = '21:00';
        $newHorario->martes_abierto = false;
        $newHorario->martes_turnos = true;
        $newHorario->martes_abrir1 = '08:00';
        $newHorario->martes_cerrar1 = '15:00';
        $newHorario->martes_abrir2 = '17:00';
        $newHorario->martes_cerrar2 = '21:00';
        $newHorario->miercoles_abierto = false;
        $newHorario->miercoles_turnos = true;
        $newHorario->miercoles_abrir1 = '08:00';
        $newHorario->miercoles_cerrar1 = '15:00';
        $newHorario->miercoles_abrir2 = '17:00';
        $newHorario->miercoles_cerrar2 = '21:00';
        $newHorario->jueves_abierto = true;
        $newHorario->jueves_turnos = false;
        $newHorario->jueves_abrir1 = '08:00';
        $newHorario->jueves_cerrar1 = '15:00';
        $newHorario->jueves_abrir2 = '17:00';
        $newHorario->jueves_cerrar2 = '21:00';
        $newHorario->viernes_abierto = true;
        $newHorario->viernes_turnos = false;
        $newHorario->viernes_abrir1 = '08:00';
        $newHorario->viernes_cerrar1 = '15:00';
        $newHorario->viernes_abrir2 = '17:00';
        $newHorario->viernes_cerrar2 = '21:00';
        $newHorario->sabado_abierto = false;
        $newHorario->sabado_turnos = true;
        $newHorario->sabado_abrir1 = '08:00';
        $newHorario->sabado_cerrar1 = '15:00';
        $newHorario->sabado_abrir2 = '17:00';
        $newHorario->sabado_cerrar2 = '21:00';
        $newHorario->domingo_abierto = true;
        $newHorario->domingo_turnos = false;
        $newHorario->domingo_abrir1 = '08:00';
        $newHorario->domingo_cerrar1 = '15:00';
        $newHorario->domingo_abrir2 = '17:00';
        $newHorario->domingo_cerrar2 = '21:00';
        $newHorario->restaurante_id = $newRestaurante->id;


        $newHorario->save();

        return redirect()->back();
    }

    /*
Funcion que es llamada por un modal y que mediante la funcion save actualiza los valores en la base de datos

    */

    public function editarPerfil(Request $request)
    {

        $user = User::find(Auth::user()->id);

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

        return redirect()->back();
    }

    /*
Funcion que es llamada por un modal y que mediante la funcion save actualiza los valores en la base de datos

    */

    public function editarDatos(Request $request, $id)
    {

        $restaurante = Restaurante::find($id);

        $restaurante->nombre = $request->get('nombre');
        $restaurante->telefono = $request->get('telefono');
        $restaurante->gmail = $request->get('gmail');
        $restaurante->save();

        return redirect()->back();
    }

    /*
Funcion que es llamada por un modal y que mediante la funcion save actualiza los valores en la base de datos

    */
    public function editarDireccion(Request $request, $id)
    {

        $restaurante = Restaurante::find($id);

        $restaurante->direccion = $request->get('direccion');
        $restaurante->ciudad = $request->get('ciudad');
        $restaurante->region = $request->get('region');
        $restaurante->pais = $request->get('pais');
        $restaurante->save();

        return redirect()->back();
    }

    /*
Funcion que al igual que la imagen del restaurante recibe un archivo que es el menu seleccionaod y lo mueve a la parte de Pdf

    */
    public function crearMenu(Request $request, $id)
    {

        $menu = new Menu();

        $menu->nombre = $request->get('nombre');
        $menu->restaurante_id = $id;

        $file = $request->file('archivo');
        $menu->urlArchivo = $file->getClientOriginalName();
        $file->move(public_path('/PDF'), $file->getClientOriginalName());
        $menu->save();

        return redirect()->back();
    }



    public function editarImagen(Request $request, $id)
    {
        $imagen = Imagen::find($id);
        $file = $request->file('archivo');
        $imagen->urlImg = $file->getClientOriginalName();
        $file->move(public_path('/img/restaurante'), $file->getClientOriginalName());
        $imagen->save();
        return redirect()->back();
    }


    public function eliminarMenu(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        return redirect()->back();
    }

    /*
Funcion que elimina un restaurante y todas las filas de las tablas que estaban relacionadas a este por la clave ajena

    */
    public function eliminarRestaurante(Request $request, $id)
    {
        $restaurante = Restaurante::find($id);

        $imagenes = Imagen::where('restaurante_id', $id);
        $imagenes->delete();

        $horario = Horario::where('restaurante_id', $id);
        $horario->delete();

        $menus = Menu::where('restaurante_id', $id);
        $menus->delete();

        $restaurante->delete();

        return redirect('manager/');
    }


    public function editarHorario(Request $request, $id)
    {

        $horario = Horario::find($id);
        /*-----------Lunes--------------*/
        $horario->lunes_abierto =  $request->get('lunes');
        $horario->lunes_turnos =  $request->get('lunesTurno');
        $horario->lunes_abrir1 =  $request->get('lunesOpen');
        $horario->lunes_cerrar1 =  $request->get('lunesClose');
        $horario->lunes_abrir2 =  $request->get('lunesOpen2');
        $horario->lunes_cerrar2 =  $request->get('lunesClose2');


        /*-----------Martes--------------*/
        $horario->martes_abierto =  $request->get('martes');
        $horario->martes_turnos =  $request->get('martesTurno');
        $horario->martes_abrir1 =  $request->get('martesOpen');
        $horario->martes_cerrar1 =  $request->get('martesClose');
        $horario->martes_abrir2 =  $request->get('martesOpen2');
        $horario->martes_cerrar2 =  $request->get('martesClose2');

        /*-----------Miercoles--------------*/
        $horario->miercoles_abierto =  $request->get('miercoles');
        $horario->miercoles_turnos =  $request->get('miercolesTurno');
        $horario->miercoles_abrir1 =  $request->get('miercolesOpen');
        $horario->miercoles_cerrar1 =  $request->get('miercolesClose');
        $horario->miercoles_abrir2 =  $request->get('miercolesOpen2');
        $horario->miercoles_cerrar2 =  $request->get('miercolesClose2');

        /*-----------Jueves--------------*/
        $horario->jueves_abierto =  $request->get('jueves');
        $horario->jueves_turnos =  $request->get('juevesTurno');
        $horario->jueves_abrir1 =  $request->get('juevesOpen');
        $horario->jueves_cerrar1 =  $request->get('juevesClose');
        $horario->jueves_abrir2 =  $request->get('juevesOpen2');
        $horario->jueves_cerrar2 =  $request->get('juevesClose2');

        /*-----------Viernes--------------*/
        $horario->viernes_abierto =  $request->get('viernes');
        $horario->viernes_turnos =  $request->get('viernesTurno');
        $horario->viernes_abrir1 =  $request->get('viernesOpen');
        $horario->viernes_cerrar1 =  $request->get('viernesClose');
        $horario->viernes_abrir2 =  $request->get('viernesOpen2');
        $horario->viernes_cerrar2 =  $request->get('viernesClose2');

        /*-----------Sabado--------------*/
        $horario->sabado_abierto =  $request->get('sabado');
        $horario->sabado_turnos =  $request->get('sabadoTurno');
        $horario->sabado_abrir1 =  $request->get('sabadoOpen');
        $horario->sabado_cerrar1 =  $request->get('sabadoClose');
        $horario->sabado_abrir2 =  $request->get('sabadoOpen2');
        $horario->sabado_cerrar2 =  $request->get('sabadoClose2');

        /*-----------Domingo--------------*/
        $horario->domingo_abierto =  $request->get('domingo');
        $horario->domingo_turnos =  $request->get('domingoTurno');
        $horario->domingo_abrir1 =  $request->get('domingoOpen');
        $horario->domingo_cerrar1 =  $request->get('domingoClose');
        $horario->domingo_abrir2 =  $request->get('domingoOpen2');
        $horario->domingo_cerrar2 =  $request->get('domingoClose2');

        $horario->save();

        return redirect()->back();
    }


    /*

Funcion que crea el pdf 
    */
    public function imprimir(Request $request, $id)
    {
        $restaurante = Restaurante::find($id);
        $menus = Menu::where('restaurante_id', '=', $id)->get();
        $imagenes = Imagen::where('restaurante_id', '=', $id)->get();


        $info = [
            'restaurante' => $restaurante,
            'menus' => $menus,
            'imagenes' => $imagenes,
        ];

        $pdf = PDF::loadView('private/menuPdf', compact('info'));
        return $pdf->download('invoice.pdf');
    }
}
