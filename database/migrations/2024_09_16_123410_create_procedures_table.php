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
        Schema::create('procedures', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProcedimiento');
            $table->longText('descripcion');
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_inventario')->nullable();
            $table->unsignedBigInteger('id_animal')->nullable();
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->timestamps();

            $table->foreign('id_inventario')->references('id')->on('inventories')->onDelete('set null');
            $table->foreign('id_animal')->references('id')->on('animals')->onDelete('set null');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedures');
    }
};
