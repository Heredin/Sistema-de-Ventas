<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;

use  Illuminate\Support\Facades\Redirect;
use  Illuminate\Support\Facades\Input;
use sisVentas\Http\Requests\ArticuloFormRequest;
use sisVentas\Articulo;
use DB;

/*Nombre de la clase: ArticuloController
Descripcion: Clase que  que agrupa las peticiones de HTTP  utilizando los metodos GET ,POST PUT,DELETE,PATCH ligandose con las rutas o bien  contiene las operaciones del sistema. 
Fecha de creacion: 18/01/2019
Version:1.0 */

class ArticuloController extends Controller
{

    //funcion que permite solo al usuario logueado realizar las acciones dentro del sistema
    public function __construct()
    {
      $this->middleware('auth');
    }

    //Función que muestra una vista o catálogo de artículos existentes
    public function index(Request $request)
    {

        if ($request)
        {
            $query=trim($request->get('searchText'));
            $articulos=DB::table('articulo as a')
            ->join('categoria as c','a.idcategoria','=','c.idcategoria')
            ->select('a.idarticulo','a.nombre','a.codigo','a.stock','c.nombre as categoria','a.descripcion','a.imagen','a.estado')
            ->where('a.nombre','LIKE','%'.$query.'%')
             ->orwhere('a.codigo','LIKE','%'.$query.'%')
            ->orderBy('a.idarticulo','desc')
            ->paginate(7);
            return view('almacen.articulo.index',["articulos"=>$articulos,"searchText"=>$query]);
        }
    }

  //Función que permite redireccionar el sistema a la vista donde se recolectaran los datospara despues almacenarlos como registro nuevo.
    public function create()
    {
        $categorias=DB::table('categoria')->where('condicion','=','1')->get();
        return view("almacen.articulo.create",["categorias"=>$categorias]);
    }

    //permite actualizar un registro proveniente del create y lo manda al index los datos en la BD
    public function store (ArticuloFormRequest $request)
    {
        $articulo=new Articulo;
        $articulo->idcategoria=$request->get('idcategoria');
        $articulo->codigo=$request->get('codigo');
        $articulo->nombre=$request->get('nombre');
        $articulo->stock=$request->get('stock');
        $articulo->descripcion=$request->get('descripcion');
        $articulo->estado='Activo';

        if(Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/articulos/',$file->getClientOriginalName());
            $articulo->imagen=$file->getClientOriginalName();
        }
        //manda todo los datos obtenidos a la tabla de artículos 
        $articulo->save();
        return Redirect::to('almacen/articulo');

    }
    //con este metódo poemos realizar una consulta a la BD
    public function show($id)
    {
        return view("almacen.articulo.show",["articulo"=>Articulo::findOrFail($id)]);
    }

    //función que permite editar el artículo
    public function edit($id)
    {
        $articulo=Articulo::findOrFail($id);
        $categorias=DB::table('categoria')->where('condicion','=','1')->get();
        return view("almacen.articulo.edit",["articulo"=>$articulo,"categorias"=>$categorias]);
    }

    //función que permite actualizar los datos de los artículos
    public function update(ArticuloFormRequest $request,$id)
    {
        $articulo=Articulo::findOrFail($id);
        $articulo->idcategoria=$request->get('idcategoria');
        $articulo->codigo=$request->get('codigo');
        $articulo->nombre=$request->get('nombre');
        $articulo->stock=$request->get('stock');
        $articulo->descripcion=$request->get('descripcion');
       

        if(Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/articulos/',$file->getClientOriginalName());
            $articulo->imagen=$file->getClientOriginalName();
        }

        $articulo->update();
        return Redirect::to('almacen/articulo');
    }

    //función que permite elimiar un artículo y retornar a la vista los valores actuales en este caso solo los cambia a inactivo
    public function destroy($id)
    {
        $articulo=Articulo::findOrFail($id);
        $articulo->estado='Inactivo';
        $articulo->update();
        return Redirect::to('almacen/articulo');
    }

}
