<div>
    <label>Fecha: </label>
    <input type="date" name="fecha" id="fecha" value="{{ $comanda->fecha ?? '' }}">
    <br>
</div>
<div>
    <label>Hora inicio: </label>
    <input type="time" name="horainicio" id="horainicio" value="{{ $comanda->horainicio ?? '' }}">
    <br>
</div>
<div>
    <label>Hora fin: </label>
    <input type="time" name="horafin" id="horafin" value="{{ $comanda->horafin ?? '' }}">
    <br>
</div>
<div>
    <label>Nro. de mesa: </label>
    <input type="text" name="idmesa" id="idmesa" value="{{ $comanda->idmesa ?? '' }}">
    <br>
</div>
<div>
    <label>Usuario: </label>
    <input type="text" name="idusuario" id="idusuario" value="{{ $comanda->idusuario ?? '' }}">
    <br>
</div>
<div>
    <label>Importe total: </label>
    <input type="text" name="importetotal" id="importetotal" value="{{ $comanda->importetotal ?? '' }}">
    <br>
</div>
<div>
    <label>Pagado: </label>
    <input type="radio" name="pagado" id="pagado" value="{{ $comanda->pagado ?? '' }}">
    <br>
</div>
<button type="submit">Guardar</button>
