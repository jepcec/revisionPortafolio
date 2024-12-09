@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Portafolio</h1>
@stop

{{-- Aquí va el contenido de la ventana --}}
@section('content')
{{-- Presentacion --}}
<div class="card">
    <!-- Cabecera del cuadro -->
    <div class="card-header">
        <h3 class="card-title">Presentación</h3>
    </div>
    
    <!-- Contenido del cuadro -->
    <div class="card-body" id="cardContent">
        <!-- Elementos precargados -->
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Caratula</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Carga académica</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Filosofía del docente</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Curriculum vitae</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
    </div>
</div>

{{-- Contenido por asignatura --}}
<div class="card">
    <!-- Cabecera del cuadro -->
    <div class="card-header">
        <h3 class="card-title">Contenido por asignatura</h3>
    </div>
    
    <!-- Contenido del cuadro -->
    <div class="card-body" id="cardContent">
        <!-- Elementos precargados -->
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Silabo</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Relacion de estudiantes</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Avance academico</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Reg. de entrega de silabo</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Reg. de asistencia</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
    </div>
</div>
{{-- Actividades de Enseñanza--}}
<div class="card">
    <!-- Cabecera del cuadro -->
    <div class="card-header">
        <h3 class="card-title">Actividades de Enseñanza</h3>
    </div>
    
    <!-- Contenido del cuadro -->
    <div class="card-body" id="cardContent">
        <!-- Elementos precargados -->
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Evidencia de Actividades de Enseñanza</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
    </div>
</div>

{{-- Evaluación de Entrada --}}
<div class="card">
    <!-- Cabecera del cuadro -->
    <div class="card-header">
        <h3 class="card-title">Evaluación de Entrada</h3>
    </div>
    
    <!-- Contenido del cuadro -->
    <div class="card-body" id="cardContent">
        <!-- Elementos precargados -->
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Enunciado y Resolución de Evaluación de Entrada</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Informe de Evaluación de Entrada</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
    </div>
</div>
{{-- Enunciado y resolución de conocimiento --}}
<div class="card">
    <!-- Cabecera del cuadro -->
    <div class="card-header">
        <h3 class="card-title">Enunciado y resolución de conocimiento</h3>
    </div>
    
    <!-- Contenido del cuadro -->
    <div class="card-body" id="cardContent">
        <!-- Elementos precargados -->
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Primera evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Segunda evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Tercera evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Sustitutorio</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
    </div>
</div>
{{-- Reg. de asistencia a la evaluación del examen --}}
<div class="card">
    <!-- Cabecera del cuadro -->
    <div class="card-header">
        <h3 class="card-title">Reg. de asistencia a la evaluación del examen</h3>
    </div>
    
    <!-- Contenido del cuadro -->
    <div class="card-body" id="cardContent">
        <!-- Elementos precargados -->
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Primera evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Segunda evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Tercera evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
    </div>
</div>

{{-- Informe min, max, promedio de evaluación de conocimiento --}}
<div class="card">
    <!-- Cabecera del cuadro -->
    <div class="card-header">
        <h3 class="card-title">Informe min, max, promedio de evaluación de conocimiento</h3>
    </div>
    
    <!-- Contenido del cuadro -->
    <div class="card-body" id="cardContent">
        <!-- Elementos precargados -->
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Primera evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Segunda evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Tercera evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
    </div>
</div>

{{-- Registro de ingreso de notas --}}
<div class="card">
    <!-- Cabecera del cuadro -->
    <div class="card-header">
        <h3 class="card-title">Registro de ingreso de notas</h3>
    </div>
    
    <!-- Contenido del cuadro -->
    <div class="card-body" id="cardContent">
        <!-- Elementos precargados -->
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Primera evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Segunda evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Tercera evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Sustitutorio</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
    </div>
</div>

{{-- Registro de notas de práctica --}}
<div class="card">
    <!-- Cabecera del cuadro -->
    <div class="card-header">
        <h3 class="card-title">Enunciado y resolución de conocimiento</h3>
    </div>
    
    <!-- Contenido del cuadro -->
    <div class="card-body" id="cardContent">
        <!-- Elementos precargados -->
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Primera evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Segunda evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Tercera evaluación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
    </div>
</div>

{{-- Proyectos individuales y grupales --}}
<div class="card">
    <!-- Cabecera del cuadro -->
    <div class="card-header">
        <h3 class="card-title">Proyectos individuales y grupales</h3>
    </div>
    
    <!-- Contenido del cuadro -->
    <div class="card-body" id="cardContent">
        <!-- Elementos precargados -->
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Rúbrica para la calificación del proyecto grupal e individual</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Doc. de asignación de proyectos grupales e individuales</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Informe sobre avance de proyectos</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Informe de entrega final de proyectos y resultados de calificación</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
        <div class="contenido-item d-flex justify-content-between align-items-center mb-2">
            <span class="contenido-texto">Otras evaluacipones si corresponde</span>
            <button class="btn btn-sm btn-danger estado-indicador" data-estado="No-Iniciado" onclick="cambiarEstado(this)">
                No-Iniciado
            </button>
        </div>
    </div>
</div>

<div class="card">
    <!-- Cabecera del cuadro -->
    <div class="card-header">
        <h3 class="card-title">Deja un comentario (opcional)</h3>
    </div>
    
    <!-- Contenido del cuadro -->
    <div class="card-body">
        <!-- Formulario con todos los elementos -->
        <form id="proyectosForm">
            <div class="contenido-item d-flex justify-content-between align-items-center mb-3">
                <textarea class="form-control" id="comentarios" name="comentarios" rows="3"></textarea>
            </div>
        </form>
    </div>
</div>
<div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
</div>

@stop
{{-- Aquí Termina el contenido--}}

@section('css')
<style>
    .card-header {
        background-color: #f4f6f9;
        border-bottom: 1px solid #dcdcdc;
    }
</style>
@stop

@section('js')
<script>
    // Función para cambiar el estado del indicador (cuatro estados)
    function cambiarEstado(indicador) {
        const estados = ['No-Iniciado', 'Subido', 'Revisado', 'Completado']; // Ciclo de estados
        const clases = {
            'No-Iniciado': 'btn-danger',
            Subido: 'btn-secondary',
            Revisado: 'btn-warning',
            Completado: 'btn-success',
        };
        const textos = {
            'No-Iniciado': 'No-Iniciado',
            Subido: 'Subido',
            Revisado: 'Revisado',
            Completado: 'Completado',
        };

        // Obtener el estado actual y calcular el siguiente
        const estadoActual = indicador.dataset.estado;
        const indiceActual = estados.indexOf(estadoActual);
        const nuevoEstado = estados[(indiceActual + 1) % estados.length];

        // Actualizar el botón
        indicador.dataset.estado = nuevoEstado; // Nuevo estado
        indicador.textContent = textos[nuevoEstado]; // Nuevo texto
        indicador.className = `btn btn-sm ${clases[nuevoEstado]} estado-indicador`; // Nueva clase
    }
</script>
<script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
