
@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col"><h1>Formulario de edición de roles</h1>
        </div>
<form action="{{ route('rol.update',$rol->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('rol.form')
</form>
    </div>
</div>
@include('includes.footer')

