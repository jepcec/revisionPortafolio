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
        Schema::create('practical_evaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_professor');
            $table->unsignedBigInteger('id_portfolio');
            $table->tinyInteger('cover')->default(0);
            $table->tinyInteger('academic_load')->default(0);
            $table->tinyInteger('philosophy')->default(0);
            $table->tinyInteger('cv')->default(0);
            $table->tinyInteger('academic_progress')->default(0);
            $table->tinyInteger('attendance_record')->default(0);
            $table->tinyInteger('teaching_activities')->default(0);
            $table->tinyInteger('practical_grades')->default(0);
            $table->tinyInteger('projects')->default(0);
            $table->foreign('id_professor')->references('id')->on('professors')->onDelete('cascade');
            $table->foreign('id_portfolio')->references('id')->on('portfolios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practical_evaluations');
    }
};
