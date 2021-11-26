@extends('adminlte::page')

@section('title', 'Editar Tipo')

@section('content_header')
    <h1>Editar Tipo</h1>
@stop

@section('content')
    
<form action="/tipos/{{$tipo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Clasificacion</label>
        <input id="clasificacion" name="clasificacion" type="text" class="form-control" value="{{$tipo->clasificacion}}">
    </div>
    <a href="/tipos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="icon" type="image/png" sizes="57x57" href="{{ asset('favicons/Logo_E.png') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop