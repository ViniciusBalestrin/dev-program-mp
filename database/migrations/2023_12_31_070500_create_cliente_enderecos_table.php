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
        Schema::create('cliente_enderecos', function (Blueprint $table) {
            $table->unsignedBigInteger("cliente_id");

            $table->string("cep", 8)->nullable();
            $table->string('rua', 80);
            $table->string('numero', 10);            

            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_enderecos');
    }
};
