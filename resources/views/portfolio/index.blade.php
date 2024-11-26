@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Portafolio</h1>
@stop

{{-- Aquí va el contendio del la ventana --}}
@section('content')
    Aquí Estaran los requisitos del portafolio a enviar,
    más un boton para enviar.
    {{-- ¡¡¡¡ AQUI !!!!!--}}
@stop
{{-- Aquí Termina el contenido--}}

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop