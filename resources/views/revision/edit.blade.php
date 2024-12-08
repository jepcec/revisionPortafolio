@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Revision</h1>
@stop

{{-- Aquí va el contendio del la ventana --}}
@section('content')
    Aqui va otro contenido
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