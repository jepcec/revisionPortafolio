@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Revision</h1>
@stop

{{-- Aquí va el contendio del la ventana --}}
@section('content')
    Aquí Estaran una ventana donde se mostrara los requisitos que marco el otro docente, así como si se aprueba o no, también habra una sección para dejar un comentario.
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