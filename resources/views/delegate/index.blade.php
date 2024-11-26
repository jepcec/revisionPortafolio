@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Asignar Revisores</h1>
@stop

{{-- Aquí va el contendio del la ventana --}}
@section('content')
    Aquí se mostrara como se generan los revisores y que docentes esta asignados a un determinado revisor.
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