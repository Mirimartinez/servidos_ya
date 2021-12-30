<?php

namespace App\Http\Controllers;

use App\Models\Itemcomanda;
use App\Models\Comanda;
use App\Models\Producto;
use Illuminate\Http\Request;

class ItemcomandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['itemcomandas']=Itemcomanda::paginate(5);
        return view('itemcomanda.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('itemcomanda.create');
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
        $datosItemComanda = request()->except('_token');
        Itemcomanda::insert($datosItemComanda);
        return response()->json($datosItemComanda);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Itemcomanda  $itemcomanda
     * @return \Illuminate\Http\Response
     */
    public function show(Itemcomanda $itemcomanda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Itemcomanda  $itemcomanda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $itemcomanda=Itemcomanda::findOrFail($id);
        return view('itemcomanda.edit', compact('itemcomanda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Itemcomanda  $itemcomanda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosItemComanda = request()->except('_token','_method');
        Itemcomanda::where('id','=',$id)->update($datosItemComanda);
        $itemcomanda=Itemcomanda::findOrFail($id);
        return view('itemcomanda.edit', compact('itemcomanda'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Itemcomanda  $itemcomanda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $precio=Itemcomanda::findOrFail($id)->precio;
        $idcomanda=Itemcomanda::findOrFail($id)->idcomanda;
        $comanda=Comanda::findOrFail($idcomanda);
        $comanda->importetotal -= $precio;
        $comanda->save();
        Itemcomanda::destroy($id);
        return redirect('mesa');
    }

    public function agregarItem($idcomanda)
    {
        $datos['productos']=Producto::all();
        $comanda=Comanda::findOrFail($idcomanda);
        return view('itemcomanda.agregarItem', compact('comanda'), $datos );
    }

    public function guardarItem($idcomanda,$idproducto) {
        $producto=Producto::findOrFail($idproducto);
        Itemcomanda::insert([
            'idcomanda' => $idcomanda,
            'idproducto' => $idproducto,
            'precio' => $producto->precio
        ]);
        $comanda=Comanda::findOrFail($idcomanda);
        $comanda->importetotal += $producto->precio;
        $comanda->save();
        return redirect('mesa');
    }
}
