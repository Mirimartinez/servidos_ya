<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Comanda;
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

    public function atender($id) {
        $mesa=Mesa::findOrFail($id);
        $curTime = new \DateTime();
        if ($mesa->estado == 0) {
            Mesa::where('id','=',$id)->update(['estado' => '1']);
            // Crear comanda
            Comanda::insert([
                'fecha' => $curTime->format("Y-m-d"),
                'horainicio' => $curTime->format("H:i:s"),
                'horafin' => '0:0:0',
                'idmesa' => $mesa->id,
                'idusuario' => 1,
                'importetotal' => 0,
                'pagado' => false
            ]);
        }
        return view('mesa.atender', compact('mesa'));
    }

    public function pagar($id) {
        $mesa=Mesa::findOrFail($id);
        //Traer los datos de la comanda, y pasarselo a la vista Pagar.
        return view('mesa.pagar', compact('mesa'));
    }
}
