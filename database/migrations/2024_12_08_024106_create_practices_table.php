<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('practices', function (Blueprint $table) {
            $table->id();

            # Conexion con el portafolio
            $table->foreignId('portfolio_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->nullable();
            # Presentación de portafolio
            $table->boolean('cover')->default(false);
            $table->boolean('academic_response')->default(false);
            $table->boolean('philosophy')->default(false);
            $table->boolean('cv')->default(false);
            # Contenido por asignatura
            $table->boolean('academic_progress')->default(false);
            $table->boolean('attendance_record')->default(false);
            # Actividad de enseñanza
            $table->boolean('teaching_activities')->default(false);
            # Evaluación
            $table->boolean('practices_grades')->default(false);
            # Proyectos
            $table->boolean('projects')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practices');
    }
};
