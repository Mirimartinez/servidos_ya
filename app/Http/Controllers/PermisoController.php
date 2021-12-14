<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //1
    public function index()
    {
        //
        $datos['permisos']=Permiso::paginate(5);
        return view('permiso.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //2
    public function create()
    {
        //
        return view('permiso.create');
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
        //
        $datosProducto = request()->except('_token');
        Permiso::insert($datosProducto);
        return response()->json($datosProducto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    //4
    public function show(Permiso $permiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    //5
    public function edit($id)
    {
        //
        $permiso=Permiso::findOrFail($id);
        return view('permiso.edit', compact('permiso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    //6
    public function update(Request $request, $id)
    {
        //
        $datosPermiso = request()->except('_token','_method');
        Permiso::where('id','=',$id)->update($datosPermiso);
        $permiso=Permiso::findOrFail($id);
        return view('permiso.edit', compact('permiso'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    //7
    public function destroy($id)
    {
        //
        Permiso::destroy($id);
        return redirect('permiso');
    }
}
