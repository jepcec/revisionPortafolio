@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Control de Revisión de Portafolios</h1>
@stop

@section('content')
<div class="row">
    <!-- Escudo y cuadro de desarrolladores -->
    <div class="col-md-3 text-center">
        <!-- Escudo -->
        <img src="https://th.bing.com/th/id/R.0ca4de3bb4de6b2842baf0e972144cb3?rik=M7OVR9cnJwf0Lw&riu=http%3a%2f%2fccomputo.unsaac.edu.pe%2fadmision%2fimages%2fUNSAAC_Logo.png&ehk=MUAD49cabWJV8lV2Loc9SSzrXC9FgSRms7tMonRYv3c%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" alt="Escudo" class="img-fluid animar-respirar" style="max-height: 150px; margin-bottom: 20px;">
        <!-- Cuadro de desarrolladores -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title">Equipo de Desarrollo</h5>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Scrum Master:</strong> Eduardo</li>
                    <li class="list-group-item"><strong>Backend Developer:</strong> Manuel</li>
                    <li class="list-group-item"><strong>Frontend Developer:</strong> Jorge</li>
                    <li class="list-group-item"><strong>Tester:</strong> Ian</li>
                    <li class="list-group-item"><strong>UI/UX Designer:</strong> Jeanpier</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Módulos informativos -->
    <div class="col-md-9">
        <div class="row">
            <!-- Módulo 1 -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>150</h4>
                        <p>Portafolios Revisados</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-folder-check"></i>
                    </div>
                </div>
            </div>

            

            <!-- Módulo 3 -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4>30</h4>
                        <p>Docentes Pendientes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-clock"></i>
                    </div>
                </div>
            </div>

            <!-- Módulo 4 -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4>5</h4>
                        <p>Rechazados</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>
            </div>

            <!-- Módulo 2 -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>75%</h4>
                        <p>Revisión Completada</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráficos -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Progreso de Revisiones</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="revisionesChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Estado de Portafolios</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="estadoChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    {{-- Estilos personalizados --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .animar-respirar {
            animation: latir 2s infinite;
            transition: all 0.3s ease-in-out;
        }

        @keyframes latir {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
    </style>
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Progreso de Revisiones
    const revisionesCtx = document.getElementById('revisionesChart').getContext('2d');
    const revisionesChart = new Chart(revisionesCtx, {
        type: 'line',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
            datasets: [{
                label: 'Revisiones',
                data: [10, 20, 30, 40, 50, 60],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2
            }]
        }
    });

    // Estado de Portafolios
    const estadoCtx = document.getElementById('estadoChart').getContext('2d');
    const estadoChart = new Chart(estadoCtx, {
        type: 'doughnut',
        data: {
            labels: ['Revisados', 'Pendientes', 'Rechazados'],
            datasets: [{
                label: 'Estado',
                data: [60, 30, 10],
                backgroundColor: ['#28a745', '#ffc107', '#dc3545']
            }]
        }
    });
</script>
@stop