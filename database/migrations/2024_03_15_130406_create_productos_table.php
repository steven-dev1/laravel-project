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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('uid', length: 100);
            $table->string('nombre', length: 100);
            $table->string('referencia', length: 10);
            $table->decimal('precio', total: 8, places: 2);
            $table->text('descripcion');
            $table->timestamps();
        });

        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('uid', length: 100);
            $table->string('nombre', length: 100);
            $table->string('apellido', length: 10);
            $table->string('email', length: 100);
            $table->string('telefono', length: 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
