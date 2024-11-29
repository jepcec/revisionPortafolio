@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Asignacion Docentes</h1>
@stop

{{-- Aquí va el contendio del la ventana --}}
@section('content')
<div class="container mt-5">
    {{-- <h1>Listado revisores</h1> --}}
    <span>Listado revisores</span>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Seleccionar docente
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            {{-- Elmentos de prueba --}}
            <a class="dropdown-item" href="#" onclick="selectItem('Elemento 1')">Elemento 1</a>
            <a class="dropdown-item" href="#" onclick="selectItem('Elemento 2')">Elemento 2</a>
            <a class="dropdown-item" href="#" onclick="selectItem('Elemento 3')">Elemento 3</a>
            <a class="dropdown-item" href="#" onclick="selectItem('Elemento 4')">Elemento 4</a>

            {{-- Para mostrar los datos de los docentes revisores         --}}
            {{-- @forelse($elementos as $elemento)
                <!-- Los elementos disparan un evento de clic -->
                <a class="dropdown-item" href="#" onclick="selectItem('{{ $elemento->nombre }}')">{{ $elemento->nombre }}</a>
            @empty
                <span class="dropdown-item">No hay elementos disponibles</span>
            @endforelse --}}
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <!-- Tabla 1 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Docentes no asignados</h3>
                </div>
                <div class="card-body">
                    <table id="tabla1" class="table table-bordered" ondragover="allowDrop(event)" ondrop="drop(event, 'tabla1')">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr draggable="true" ondragstart="drag(event)" id="docente-1">
                                <td>1</td>
                                <td>Docente 1</td>
                            </tr>
                            <tr draggable="true" ondragstart="drag(event)" id="docente-2">
                                <td>2</td>
                                <td>Docente 2</td>
                            </tr>
                            <tr draggable="true" ondragstart="drag(event)" id="docente-3">
                                <td>3</td>
                                <td>Docente 3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tabla 2 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Docentes asignados a revisor</h3>
                </div>
                <div class="card-body">
                    <table id="tabla2" class="table table-bordered" ondragover="allowDrop(event)" ondrop="drop(event, 'tabla2')">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr draggable="true" ondragstart="drag(event)" id="docente-4">
                                <td>4</td>
                                <td>Docente 4</td>
                            </tr>
                            <tr draggable="true" ondragstart="drag(event)" id="docente-5">
                                <td>5</td>
                                <td>Docente 5</td>
                            </tr>
                            <tr draggable="true" ondragstart="drag(event)" id="docente-6">
                                <td>6</td>
                                <td>Docente 6</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- Button -->
<div class="row mt-4">
    <div class="col-12 text-center">
        <button class="btn btn-success" id="guardarCambios" onclick="guardarCambios()">Asignar</button>
    </div>
</div>

</div>
@stop
{{-- Aquí Termina el contenido--}}

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
{{-- cambiar nombre de desplegable  --}}
<script>
    function selectItem(nombre) {
        document.getElementById('dropdownMenuButton').textContent = nombre;
    }
</script>

<script> 
    console.log("Hi, I'm using the Laravel-AdminLTE package!"); 
</script>

{{-- Arrastar y soltar --}}
<script>
    // Permitir el arrastre
    function allowDrop(event) {
        event.preventDefault();
    }

    // Capturar el elemento arrastrado
    function drag(event) {
        event.dataTransfer.setData("text", event.target.id);
    }

    // Soltar el elemento en la tabla objetivo
    function drop(event, targetTableId) {
        event.preventDefault();
        const data = event.dataTransfer.getData("text");
        const draggedElement = document.getElementById(data);

        // Mover el elemento a la tabla objetivo
        const targetTable = document.getElementById(targetTableId).querySelector('tbody');
        targetTable.appendChild(draggedElement);
    }
</script>

<!-- funcion boton -->
<script>
    function guardarCambios() {
        // Obtén los elementos de las tablas
        const tabla1 = Array.from(document.querySelectorAll('#tabla1 tbody tr')).map(row => row.id);
        const tabla2 = Array.from(document.querySelectorAll('#tabla2 tbody tr')).map(row => row.id);

        // Lógica para guardar los cambios (puedes enviar datos al servidor o mostrar un mensaje)
        console.log('Docentes no asignados:', tabla1);
        console.log('Docentes asignados a revisor:', tabla2);
        alert('Cambios guardados correctamente.');
    }
</script>
@stop