<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //1
    public function index()
    {
        $datos['productos']=Producto::paginate(5);
        return view('producto.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //2
    public function create()
    {
        //agregar el parametro que manda la lista de categorias de productos a la vista.
        $datos['categorias']=Categoria::all();
        return view('producto.create',$datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //3
    public function store(Request $request)
    {
        $datosProducto = request()->except('_token');
        Producto::insert($datosProducto);
        return response()->json($datosProducto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    //4
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    //5
    public function edit($id)
    {
        $producto=Producto::findOrFail($id);

        $categorias=Categoria::all();
        return view('producto.edit')
            ->with(compact('producto'))
            ->with(compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    //6
    public function update(Request $request, $id)
    {
        $datosProducto = request()->except('_token','_method');
        Producto::where('id','=',$id)->update($datosProducto);
        $producto=Producto::findOrFail($id);
        $categorias=Categoria::all();
        return view('producto.edit')
            ->with(compact('producto'))
            ->with(compact('categorias'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    //7
    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect('producto');
    }
}
