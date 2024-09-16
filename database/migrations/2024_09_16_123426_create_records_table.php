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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProcedimiento');
            $table->string('medicamento');
            $table->integer('dosis');
            $table->date('fechaRealisacion');
            $table->unsignedBigInteger('id_animal')->nullable();
            $table->timestamps();

            $table->foreign('id_animal')->references('id')->on('animals')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
