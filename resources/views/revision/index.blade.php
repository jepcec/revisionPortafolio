@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Revisión de Portafolio</h1>
@stop

@section('content')
    <p>Esta sección muestra los requisitos marcados por el docente y permite agregar comentarios.</p>

    <form action="" method="POST">
        @csrf

        <div class="card">
            <div class="card-body">
                <!-- Presentación de portafolio -->
                <fieldset class="form-group mb-4">
                    <legend class="text-primary font-weight-bold d-flex align-items-center">
                        Presentación de Portafolio
                        <!-- Botón alineado a la derecha -->
                        <div class="d-flex justify-content-end ml-auto">
                            <button type="button" class="btn btn-danger" id="1">Incompleto</button>
                        </div>
                    </legend>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion1" name="opciones[]" value="opcion1">
                        <label class="form-check-label" for="opcion1">Carátula</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion2" name="opciones[]" value="opcion2">
                        <label class="form-check-label" for="opcion2">Carga Académica</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion3" name="opciones[]" value="opcion3">
                        <label class="form-check-label" for="opcion3">Filosofía del Docente</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion4" name="opciones[]" value="opcion4">
                        <label class="form-check-label" for="opcion4">Currículum Vitae</label>
                    </div>
                </fieldset>
        
                <script>
                    // Selecciona los checkboxes y el botón
                    const checkboxes = document.querySelectorAll('.form-check-input');
                    const submitButton = document.getElementById('1');
                
                    // Función para comprobar si todos los checkboxes están seleccionados
                    function checkAllSelected() {
                        const allSelected = Array.from(checkboxes).every(checkbox => checkbox.checked);
                        if (allSelected) {
                            submitButton.textContent = 'Completado'; // Cambia el texto a "Completado"
                            submitButton.classList.remove('btn-danger'); // Elimina la clase de "Incompleto"
                            submitButton.classList.add('btn-success'); // Añade una nueva clase para el estilo
                        } else {
                            submitButton.textContent = 'Incompleto'; // Si no todos están seleccionados, muestra "Incompleto"
                            submitButton.classList.remove('btn-success'); // Vuelve al estilo original
                            submitButton.classList.add('btn-danger');
                        }
                    }
                
                    // Añadir event listeners a todos los checkboxes
                    checkboxes.forEach(checkbox => {
                        checkbox.addEventListener('change', checkAllSelected);
                    });
                
                    // Llamar a la función al cargar la página para establecer el estado inicial
                    checkAllSelected();
                </script>
            </div>
        </div>
        

        <div class="card">
            <div class="card-body">
                <!-- Contenido por asignatura -->
                <fieldset class="form-group mb-4">
                    <legend class="text-primary font-weight-bold d-flex align-items-center">
                        Contenido por Asignatura
                        <!-- Botón alineado a la derecha -->
                        <div class="d-flex justify-content-end ml-auto">
                            <button type="button" class="btn btn-danger" id="2">Incompleto</button>
                        </div>
                    </legend>
                    <div class="form-check">
                        <input class="form-check-input2" type="checkbox" id="opcion5" name="opciones[]" value="opcion5">
                        <label class="form-check-label" for="opcion5">Sílabo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="checkbox" id="opcion6" name="opciones[]" value="opcion6">
                        <label class="form-check-label" for="opcion6">Relación de Estudiantes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="checkbox" id="opcion7" name="opciones[]" value="opcion7">
                        <label class="form-check-label" for="opcion7">Avance Académico</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="checkbox" id="opcion8_1" name="opciones[]" value="opcion8_1">
                        <label class="form-check-label" for="opcion8">Reg. de Entrega de Sílabo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="checkbox" id="opcion8_2" name="opciones[]" value="opcion8_2">
                        <label class="form-check-label" for="opcion9">Reg. de Asistencia</label>
                    </div>
                </fieldset>
        
                <!-- Script de JavaScript -->
                <script>
                    // Selecciona los checkboxes y el botón
                    const checkboxes2 = document.querySelectorAll('.form-check-input2');
                    const submitButton2 = document.getElementById('2');
        
                    // Función para comprobar si todos los checkboxes están seleccionados
                    function checkAllSelected() {
                        const allSelected = Array.from(checkboxes2).every(checkbox => checkbox.checked);
                        if (allSelected) {
                            submitButton2.textContent = 'Completado'; // Cambia el texto a "Completado"
                            submitButton2.classList.remove('btn-danger'); // Elimina la clase de "Incompleto"
                            submitButton2.classList.add('btn-success'); // Añade una nueva clase para el estilo
                        } else {
                            submitButton2.textContent = 'Incompleto'; // Si no todos están seleccionados, muestra "Incompleto"
                            submitButton2.classList.remove('btn-success'); // Vuelve al estilo original
                            submitButton2.classList.add('btn-danger');
                        }
                    }
        
                    // Añadir event listeners a todos los checkboxes
                    checkboxes2.forEach(checkbox => {
                        checkbox.addEventListener('change', checkAllSelected);
                    });
        
                    // Llamar a la función al cargar la página para establecer el estado inicial
                    checkAllSelected();
                </script>
            </div>
        </div>

    <div class="card">
        <div class="card-body">
                <!-- Actividades de enseñanza -->
                <fieldset class="form-group mb-4">
                    <legend class="text-primary font-weight-bold d-flex align-items-center">
                        Actividades de Enseñanza
                        <!-- Botón alineado a la derecha -->
                        <div class="d-flex justify-content-end ml-auto">
                            <button type="button" class="btn btn-danger" id="3">Incompleto</button>
                        </div>
                    </legend>
                    <div class="form-check">
                        <input class="form-check-input3" type="checkbox" id="opcion10" name="opciones[]" value="opcion10">
                        <label class="form-check-label" for="opcion10">Evidencia de Actividades de Enseñanza</label>
                    </div>
                </fieldset>
                <!-- Script de JavaScript -->
                <script>
                    // Selecciona los checkboxes y el botón
                    const checkboxes3 = document.querySelectorAll('.form-check-input3');
                    const submitButton3 = document.getElementById('3');
        
                    // Función para comprobar si todos los checkboxes están seleccionados
                    function checkAllSelected() {
                        const allSelected = Array.from(checkboxes3).every(checkbox => checkbox.checked);
                        if (allSelected) {
                            submitButton3.textContent = 'Completado'; // Cambia el texto a "Completado"
                            submitButton3.classList.remove('btn-danger'); // Elimina la clase de "Incompleto"
                            submitButton3.classList.add('btn-success'); // Añade una nueva clase para el estilo
                        } else {
                            submitButton3.textContent = 'Incompleto'; // Si no todos están seleccionados, muestra "Incompleto"
                            submitButton3.classList.remove('btn-success'); // Vuelve al estilo original
                            submitButton3.classList.add('btn-danger');
                        }
                    }
        
                    // Añadir event listeners a todos los checkboxes
                    checkboxes3.forEach(checkbox => {
                        checkbox.addEventListener('change', checkAllSelected);
                    });
        
                    // Llamar a la función al cargar la página para establecer el estado inicial
                    checkAllSelected();
                </script>
            </script>
        </div>
    </div>

                <!-- Evaluaciones -->
                <fieldset class="form-group mb-4">                    
                    <legend class="text-primary font-weight-bold">Evaluaciones</legend>

        <div class="card">
            <div class="card-body">
                <fieldset class="form-group">
                        <legend class="text-primary font-weight-bold d-flex align-items-center">
                            Evaluación de Entrada
                            <!-- Botón alineado a la derecha -->
                            <div class="d-flex justify-content-end ml-auto">
                                <button type="button" class="btn btn-danger" id="4">Incompleto</button>
                            </div>
                        </legend>

                        <div class="form-check">
                            <input class="form-check-input4" type="checkbox" id="opcion11" name="opciones[]" value="opcion11">
                            <label class="form-check-label" for="opcion11">Enunciado y Resolución de Evaluación de Entrada</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input4" type="checkbox" id="opcion12" name="opciones[]" value="opcion12">
                            <label class="form-check-label" for="opcion12">Informe de Evaluación de Entrada</label>
                        </div>
                    </fieldset>
                    <script>
                        // Selecciona los checkboxes y el botón
                        const checkboxes4 = document.querySelectorAll('.form-check-input4');
                        const submitButton4 = document.getElementById('4');
            
                        // Función para comprobar si todos los checkboxes están seleccionados
                        function checkAllSelected() {
                            const allSelected = Array.from(checkboxes4).every(checkbox => checkbox.checked);
                            if (allSelected) {
                                submitButton4.textContent = 'Completado'; // Cambia el texto a "Completado"
                                submitButton4.classList.remove('btn-danger'); // Elimina la clase de "Incompleto"
                                submitButton4.classList.add('btn-success'); // Añade una nueva clase para el estilo
                            } else {
                                submitButton4.textContent = 'Incompleto'; // Si no todos están seleccionados, muestra "Incompleto"
                                submitButton4.classList.remove('btn-success'); // Vuelve al estilo original
                                submitButton4.classList.add('btn-danger');
                            }
                        }
            
                        // Añadir event listeners a todos los checkboxes
                        checkboxes4.forEach(checkbox => {
                            checkbox.addEventListener('change', checkAllSelected);
                        });
            
                        // Llamar a la función al cargar la página para establecer el estado inicial
                        checkAllSelected();
                    </script>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                    <fieldset class="form-group mb-4">
                        <legend class="text-primary font-weight-bold d-flex align-items-center">
                            Enunciado y resolución de conocimiento
                            <!-- Botón alineado a la derecha -->
                            <div class="d-flex justify-content-end ml-auto">
                                <button type="button" class="btn btn-danger" id="5">Incompleto</button>
                            </div>
                        </legend>
                        <div class="form-check">
                            <input class="form-check-input5" type="checkbox" id="opcion13" name="opciones[]" value="opcion13">
                            <label class="form-check-label" for="opcion13">Primera evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input5" type="checkbox" id="opcion14" name="opciones[]" value="opcion14">
                            <label class="form-check-label" for="opcion14">Segunda evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input5" type="checkbox" id="opcion15" name="opciones[]" value="opcion15">
                            <label class="form-check-label" for="opcion15">Tercera evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input5" type="checkbox" id="opcion11" name="opciones[]" value="opcion11">
                            <label class="form-check-label" for="opcion11">Sustitutorio</label>
                        </div>
                    </fieldset>
                    <script>
                        // Selecciona los checkboxes y el botón
                        const checkboxes5 = document.querySelectorAll('.form-check-input5');
                        const submitButton5 = document.getElementById('5');
            
                        // Función para comprobar si todos los checkboxes están seleccionados
                        function checkAllSelected() {
                            const allSelected = Array.from(checkboxes5).every(checkbox => checkbox.checked);
                            if (allSelected) {
                                submitButton5.textContent = 'Completado'; // Cambia el texto a "Completado"
                                submitButton5.classList.remove('btn-danger'); // Elimina la clase de "Incompleto"
                                submitButton5.classList.add('btn-success'); // Añade una nueva clase para el estilo
                            } else {
                                submitButton5.textContent = 'Incompleto'; // Si no todos están seleccionados, muestra "Incompleto"
                                submitButton5.classList.remove('btn-success'); // Vuelve al estilo original
                                submitButton5.classList.add('btn-danger');
                            }
                        }
            
                        // Añadir event listeners a todos los checkboxes
                        checkboxes5.forEach(checkbox => {
                            checkbox.addEventListener('change', checkAllSelected);
                        });
            
                        // Llamar a la función al cargar la página para establecer el estado inicial
                        checkAllSelected();
                    </script>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                    <fieldset class="form-group">
                        <legend class="text-primary font-weight-bold d-flex align-items-center">
                            Reg. de asistencia a la evaluación del examen
                            <!-- Botón alineado a la derecha -->
                            <div class="d-flex justify-content-end ml-auto">
                                <button type="button" class="btn btn-danger" id="6">Incompleto</button>
                            </div>
                        </legend>
                        <legend class="text-primary font-weight-bold"></legend>
                        <div class="form-check">
                            <input class="form-check-input6" type="checkbox" id="opcion13" name="opciones[]" value="opcion13">
                            <label class="form-check-label" for="opcion13">Primera evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input6" type="checkbox" id="opcion14" name="opciones[]" value="opcion14">
                            <label class="form-check-label" for="opcion14">Segunda evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input6" type="checkbox" id="opcion15" name="opciones[]" value="opcion15">
                            <label class="form-check-label" for="opcion15">Tercera evaluación</label>
                        </div>
                        <script>
                            // Selecciona los checkboxes y el botón
                            const checkboxes6 = document.querySelectorAll('.form-check-input6');
                            const submitButton6 = document.getElementById('6');
                
                            // Función para comprobar si todos los checkboxes están seleccionados
                            function checkAllSelected() {
                                const allSelected = Array.from(checkboxes6).every(checkbox => checkbox.checked);
                                if (allSelected) {
                                    submitButton6.textContent = 'Completado'; // Cambia el texto a "Completado"
                                    submitButton6.classList.remove('btn-danger'); // Elimina la clase de "Incompleto"
                                    submitButton6.classList.add('btn-success'); // Añade una nueva clase para el estilo
                                } else {
                                    submitButton6.textContent = 'Incompleto'; // Si no todos están seleccionados, muestra "Incompleto"
                                    submitButton6.classList.remove('btn-success'); // Vuelve al estilo original
                                    submitButton6.classList.add('btn-danger');
                                }
                            }
                
                            // Añadir event listeners a todos los checkboxes
                            checkboxes6.forEach(checkbox => {
                                checkbox.addEventListener('change', checkAllSelected);
                            });
                
                            // Llamar a la función al cargar la página para establecer el estado inicial
                            checkAllSelected();
                        </script>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                        <fieldset class="form-group">
                            <legend class="text-primary font-weight-bold d-flex align-items-center">
                                Informe min, max, promedio de evaluación de conocimiento
                                <!-- Botón alineado a la derecha -->
                                <div class="d-flex justify-content-end ml-auto">
                                    <button type="button" class="btn btn-danger" id="7">Incompleto</button>
                                </div>
                            </legend>   
                            
                        <div class="form-check">
                            <input class="form-check-input7" type="checkbox" id="opcion13" name="opciones[]" value="opcion13">
                            <label class="form-check-label" for="opcion13">Primera evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input7" type="checkbox" id="opcion14" name="opciones[]" value="opcion14">
                            <label class="form-check-label" for="opcion14">Segunda evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input7" type="checkbox" id="opcion15" name="opciones[]" value="opcion15">
                            <label class="form-check-label" for="opcion15">Tercera evaluación</label>
                        </div>
                        <script>
                            // Selecciona los checkboxes y el botón
                            const checkboxes7 = document.querySelectorAll('.form-check-input7');
                            const submitButton7 = document.getElementById('7');
                
                            // Función para comprobar si todos los checkboxes están seleccionados
                            function checkAllSelected() {
                                const allSelected = Array.from(checkboxes7).every(checkbox => checkbox.checked);
                                if (allSelected) {
                                    submitButton7.textContent = 'Completado'; // Cambia el texto a "Completado"
                                    submitButton7.classList.remove('btn-danger'); // Elimina la clase de "Incompleto"
                                    submitButton7.classList.add('btn-success'); // Añade una nueva clase para el estilo
                                } else {
                                    submitButton7.textContent = 'Incompleto'; // Si no todos están seleccionados, muestra "Incompleto"
                                    submitButton7.classList.remove('btn-success'); // Vuelve al estilo original
                                    submitButton7.classList.add('btn-danger');
                                }
                            }
                
                            // Añadir event listeners a todos los checkboxes
                            checkboxes7.forEach(checkbox => {
                                checkbox.addEventListener('change', checkAllSelected);
                            });
                
                            // Llamar a la función al cargar la página para establecer el estado inicial
                            checkAllSelected();
                        </script>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                        <fieldset class="form-group">
                            <legend class="text-primary font-weight-bold d-flex align-items-center">
                                Registro de ingreso de notas
                                <!-- Botón alineado a la derecha -->
                                <div class="d-flex justify-content-end ml-auto">
                                    <button type="button" class="btn btn-danger" id="8">Incompleto</button>
                                </div>
                            </legend>  
                        <div class="form-check">
                            <input class="form-check-input8" type="checkbox" id="opcion13" name="opciones[]" value="opcion13">
                            <label class="form-check-label" for="opcion13">Primera evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input8" type="checkbox" id="opcion14" name="opciones[]" value="opcion14">
                            <label class="form-check-label" for="opcion14">Segunda evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input8" type="checkbox" id="opcion15" name="opciones[]" value="opcion15">
                            <label class="form-check-label" for="opcion15">Tercera evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input8" type="checkbox" id="opcion11" name="opciones[]" value="opcion11">
                            <label class="form-check-label" for="opcion11">Sustitutorio</label>
                        </div>
                        <script>
                            // Selecciona los checkboxes y el botón
                            const checkboxes8 = document.querySelectorAll('.form-check-input8');
                            const submitButton8 = document.getElementById('8');
                
                            // Función para comprobar si todos los checkboxes están seleccionados
                            function checkAllSelected() {
                                const allSelected = Array.from(checkboxes8).every(checkbox => checkbox.checked);
                                if (allSelected) {
                                    submitButton8.textContent = 'Completado'; // Cambia el texto a "Completado"
                                    submitButton8.classList.remove('btn-danger'); // Elimina la clase de "Incompleto"
                                    submitButton8.classList.add('btn-success'); // Añade una nueva clase para el estilo
                                } else {
                                    submitButton8.textContent = 'Incompleto'; // Si no todos están seleccionados, muestra "Incompleto"
                                    submitButton8.classList.remove('btn-success'); // Vuelve al estilo original
                                    submitButton8.classList.add('btn-danger');
                                }
                            }
                
                            // Añadir event listeners a todos los checkboxes
                            checkboxes8.forEach(checkbox => {
                                checkbox.addEventListener('change', checkAllSelected);
                            });
                
                            // Llamar a la función al cargar la página para establecer el estado inicial
                            checkAllSelected();
                        </script>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                        <fieldset class="form-group">
                            <legend class="text-primary font-weight-bold d-flex align-items-center">
                                Registro de notas de práctica
                                <!-- Botón alineado a la derecha -->
                                <div class="d-flex justify-content-end ml-auto">
                                    <button type="button" class="btn btn-danger" id="9">Incompleto</button>
                                </div>
                            </legend>  
                        <div class="form-check">
                            <input class="form-check-input9" type="checkbox" id="opcion13" name="opciones[]" value="opcion13">
                            <label class="form-check-label" for="opcion13">Primera evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input9" type="checkbox" id="opcion14" name="opciones[]" value="opcion14">
                            <label class="form-check-label" for="opcion14">Segunda evaluación</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input9" type="checkbox" id="opcion15" name="opciones[]" value="opcion15">
                            <label class="form-check-label" for="opcion15">Tercera evaluación</label>
                        </div>
                        <script>
                            // Selecciona los checkboxes y el botón
                            const checkboxes9 = document.querySelectorAll('.form-check-input9');
                            const submitButton9 = document.getElementById('9');
                
                            // Función para comprobar si todos los checkboxes están seleccionados
                            function checkAllSelected() {
                                const allSelected = Array.from(checkboxes9).every(checkbox => checkbox.checked);
                                if (allSelected) {
                                    submitButton9.textContent = 'Completado'; // Cambia el texto a "Completado"
                                    submitButton9.classList.remove('btn-danger'); // Elimina la clase de "Incompleto"
                                    submitButton9.classList.add('btn-success'); // Añade una nueva clase para el estilo
                                } else {
                                    submitButton9.textContent = 'Incompleto'; // Si no todos están seleccionados, muestra "Incompleto"
                                    submitButton9.classList.remove('btn-success'); // Vuelve al estilo original
                                    submitButton9.classList.add('btn-danger');
                                }
                            }
                
                            // Añadir event listeners a todos los checkboxes
                            checkboxes9.forEach(checkbox => {
                                checkbox.addEventListener('change', checkAllSelected);
                            });
                
                            // Llamar a la función al cargar la página para establecer el estado inicial
                            checkAllSelected();
                        </script>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    </div><fieldset class="form-group">
                        <legend class="text-primary font-weight-bold d-flex align-items-center">
                            Proyectos individuales y grupales
                            <!-- Botón alineado a la derecha -->
                            <div class="d-flex justify-content-end ml-auto">
                                <button type="button" class="btn btn-danger" id="10">Incompleto</button>
                            </div>
                        </legend>                   
                    <div class="form-check">
                        <input class="form-check-input10" type="checkbox" id="opcion13" name="opciones[]" value="opcion13">
                        <label class="form-check-label" for="opcion13">Rúbrica para la calificación del proyecto grupal e individual</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input10" type="checkbox" id="opcion14" name="opciones[]" value="opcion14">
                        <label class="form-check-label" for="opcion14">Doc. de asignación de proyectos grupales e individuales</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input10" type="checkbox" id="opcion15" name="opciones[]" value="opcion15">
                        <label class="form-check-label" for="opcion15">Informe sobre avance de proyectos</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input10" type="checkbox" id="opcion15" name="opciones[]" value="opcion15">
                        <label class="form-check-label" for="opcion15">Informe de entrega final de proyectos y resultaods de calificación</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input10" type="checkbox" id="opcion15" name="opciones[]" value="opcion15">
                        <label class="form-check-label" for="opcion15">Otras evaluacipones si corresponde</label>
                    </div>  
                    <script>
                        // Selecciona los checkboxes y el botón
                        const checkboxes10 = document.querySelectorAll('.form-check-input10');
                        const submitButton10 = document.getElementById('10');
            
                        // Función para comprobar si todos los checkboxes están seleccionados
                        function checkAllSelected() {
                            const allSelected = Array.from(checkboxes10).every(checkbox => checkbox.checked);
                            if (allSelected) {
                                submitButton10.textContent = 'Completado'; // Cambia el texto a "Completado"
                                submitButton10.classList.remove('btn-danger'); // Elimina la clase de "Incompleto"
                                submitButton10.classList.add('btn-success'); // Añade una nueva clase para el estilo
                            } else {
                                submitButton10.textContent = 'Incompleto'; // Si no todos están seleccionados, muestra "Incompleto"
                                submitButton10.classList.remove('btn-success'); // Vuelve al estilo original
                                submitButton10.classList.add('btn-danger');
                            }
                        }
            
                        // Añadir event listeners a todos los checkboxes
                        checkboxes10.forEach(checkbox => {
                            checkbox.addEventListener('change', checkAllSelected);
                        });
            
                        // Llamar a la función al cargar la página para establecer el estado inicial
                        checkAllSelected();
                    </script>  
                </div>
                <div class="card">
                    <div class="card-body">       
                <div class="form-group">
                    <label for="comentarios">Deja un comentario (opcional):</label>
                    <textarea class="form-control" id="comentarios" name="comentarios" rows="3"></textarea>
                </div>
                <!-- Comentarios -->
                <div class="form-check ">
                    <input class="form-check-input" type="checkbox" id="opcion15" name="opciones[]" value="opcion15">
                    <label class="form-check-label" for="opcion15">Cierre de portafolio</label>
                </div>
            </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </div>
        </div>
    </form>
@stop

@section('css')
    {{-- Puedes agregar estilos adicionales aquí --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log("Formulario de revisión cargado con éxito."); </script>
@stop
