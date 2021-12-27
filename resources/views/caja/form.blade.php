<div>
    <label>Importe total: </label>
    <input class="form-control m-2 text-center" type="text" name="importe_total" id="importe_total" value="{{ $caja->importe_total ?? '' }}">

</div>
<div>
    <label>Fecha: </label>
    <input class="form-control m-2 text-center" type="date" name="fecha" id="fecha" value="{{ $caja->fecha ?? '' }}">

</div>
<div>
    <label>Hora: </label>
    <input class="form-control m-2 text-center" type="time" name="hora" id="hora" value="{{ $caja->hora ?? '' }}">

</div>
<button class="btn-primary rounded-3 m-2" type="submit">Guardar</button>
