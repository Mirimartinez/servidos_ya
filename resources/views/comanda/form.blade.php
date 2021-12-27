<div>
    <label>Fecha: </label>
    <input class="form-control m-2 text-center" type="date" name="fecha" id="fecha" value="{{ $comanda->fecha ?? '' }}">
</div>
<div>
    <label>Hora inicio: </label>
    <input class="form-control m-2 text-center" type="time" name="horainicio" id="horainicio" value="{{ $comanda->horainicio ?? '' }}">
</div>
<div>
    <label>Hora fin: </label>
    <input class="form-control m-2 text-center" type="time" name="horafin" id="horafin" value="{{ $comanda->horafin ?? '' }}">
</div>
<div>
    <label>Nro. de mesa: </label>
    <input class="form-control m-2 text-center" type="text" name="idmesa" id="idmesa" value="{{ $comanda->idmesa ?? '' }}">
</div>
<div>
    <label>Usuario: </label>
    <input class="form-control m-2 text-center" type="text" name="idusuario" id="idusuario" value="{{ $comanda->idusuario ?? '' }}">
</div>
<div>
    <label>Importe total: </label>
    <input class="form-control m-2 text-center" type="text" name="importetotal" id="importetotal" value="{{ $comanda->importetotal ?? '' }}">
</div>
<div>
    <label>Pagado: </label>
    <input class="form-control m-2 text-center" type="radio" name="pagado" id="pagado" value="{{ $comanda->pagado ?? '' }}">
</div>
<button class="btn-primary rounded-3 m-2" type="submit">Guardar</button>
