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
        Schema::create('cliente_contato', function (Blueprint $table) {
            $table->unsignedBigInteger("cliente_id")->unique();

            $table->string('email', 100);
            $table->string('telefone', 15)->nullable();
            $table->string('celular', 15)->nullable();

            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_contato');
    }
};
