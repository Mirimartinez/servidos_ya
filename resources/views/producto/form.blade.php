<div class="container container-fluid">

    <div>
        <label>Nombre: </label>
        <input class="form-control m-2 text-center" type="text" name="nombre" id="nombre" value="{{ $producto->nombre ?? '' }}">

    </div>
    <div>
        <label>Descripcion: </label>
        <input class="form-control m-2 text-center" type="text" name="descripcion" id="descripcion" value="{{ $producto->descripcion ?? '' }}">
    </div>
    <div>
        <label>Categorias: </label>

        <select class="form-select m-2 text-center"  name="idcategoria">
            <option selected>Seleccione una categoria</option>


            @foreach($categorias as $categoria)

                <option value="{{$categoria->id ?? ''}}">{{$categoria->nombre ?? ''}}</option>


            @endforeach


        </select>



    </div>
    <div>
        <label>Precio: </label>
        <input class="form-control m-2 text-center" type="text" name="precio" id="precio" value="{{ $producto->precio ?? '' }}">
    </div>

    <button class="btn-primary rounded-3 m-2" type="submit">Guardar</button>
</div>



