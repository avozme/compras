<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained()->onDelete('cascade');
            $table->foreignId('cliente_id')->constrained()->onDelete('cascade');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('unidades');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('compras');
    }
};
