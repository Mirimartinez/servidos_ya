@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="http://localhost/proyecto_curso_utn/servidos_ya/public/mesa"><i class="fas fa-arrow-left h2"></i></a>
</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Mostrar la lista de productos</h1>
        </div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Comentario</th>

        </tr>
    </thead>
    <tbody>
        @foreach($comentarios as $comentario)
        <tr class="align-text-bottom">
            <td>{{ $comentario->id }}</td>
            <td>{{ $comentario->comentario }}</td>

            <td class="btn-group">
                <a class="btn btn-primary rounded-3 mx-1 border-end border-bottom pt-2" href="{{ route('comentario.edit',$comentario->id) }}">Editar</a>

                <form action="{{ route('comentario.destroy',$comentario->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn-danger rounded-3 mx-1 p-2" type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>
@include('includes.footer')


