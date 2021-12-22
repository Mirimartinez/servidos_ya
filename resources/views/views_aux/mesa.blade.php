@include('includes.header')
<div class="container-fluid color1">
  <h1 class="color1 text-center text-color2 pb-1 pt-3">MESA N°</h1>
  {{--  CONTENIDO CENTRAL --}}
    {{-- CATEGORIAS E ITEMS --}}
      <div class="row d-flex flex-wrap container-fluid">
        {{-- CATEGORIAS --}}
        <div class="col-sm-1 col-md-2 col-lg-1 color1 text-color2 me-3" style="height: inherit">
            @for($i = 1; $i < 10; $i++)
                 <button class="text-uppercase m-2 rounded button1 color2">Categoria {{$i}}</button>
            @endfor
        </div>
  {{-- COLUMNA DE ITEMS --}}
  <div class="col-sm-6 col-md-8 col-lg-8">
    {{-- LINEA DE ITEMS --}}
    <div class="row gx-1 justify-content-around color1 me-3 ms-4">
      <!-- ITEMS -->
        @for($i = 1; $i <= 21; $i++)
            <a class="btn col-1 color2 mx-2 my-2 shadow rounded pt-1" role="button" style="height: 7rem; width: 8rem;">
                <h5 class="text-color1 text-center pt-3">Producto {{$i}}</h5>
                <div class="btn-group-sm ms-2">
                    <button class="btn button1"><i class="h6 pt-1 fas fa-minus"></i></button>
                    <button class="btn button1"><i class="h6 ps-2 pt-1 pe-1 fas fa-plus"></i></button>
                </div>
            </a>
        @endfor
    </div>
  </div>

          <!-- COLUMNA DE COMANDA -->
    <div class="col-sm-2 col-md-2 col-lg-3 color2 rounded d-flex container-fluid text-color1 text-center mt-2 mb-5" style="width: 18rem;">
        <!-- LINEA DE COMANDA-->
        <div class="row">
        <div class="table-responsive-md">
        <table class="table text-color1 d-flex flex-column table-bordered table-hover">
        <thead class="text-color1">

          <tr>
            <th scope="col">Cant.</th>
            <th scope="col">Item</th>
            <th scope="col">P. Uni.</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Licuado</td>
            <td>$150</td>
            <td>$150</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Tostado</td>
            <td>$200</td>
            <td>$200</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Café Jarrito</td>
            <td>$80</td>
            <td>$160</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Agua con gas</td>
            <td>$120</td>
            <td>$120</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Alfajor</td>
            <td>$70</td>
            <td>$140</td>
          </tr>
          <tr>
              <th scope="row" class="h4" colspan="2">TOTAL</th>
              <td></td>
              <td class="h4">{{$total}}</td>

          </tr>
        </tbody>
      </table>
            </div>
    </div>
            </div>

</div>
</div>

