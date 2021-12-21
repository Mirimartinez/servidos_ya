<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['mesas']=Mesa::paginate(20);
        return view('mesa.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mesa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mesa = ['estado'=>'0'];
        //$datosMesa = request()->except('_token');
        $cantidad = $request['cantidad'];
        for ($i = 1; $i <= $cantidad; $i++) {
            Mesa::insert($mesa);
        }

        //return response()->json($datosMesa);
        return redirect('mesa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(Mesa $mesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mesa=Mesa::findOrFail($id);
        return view('mesa.edit', compact('mesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosMesa = request()->except('_token','_method');
        Mesa::where('id','=',$id)->update($datosMesa);
        $mesa=Mesa::findOrFail($id);
        return view('mesa.edit', compact('mesa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Mesa::destroy($id);
        return redirect('mesa');
    }
}
