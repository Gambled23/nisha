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
        Schema::create('chambeador-_pedido', function (Blueprint $table) {
            $table->foreignId('chambeador_id')->constrained();
            $table->foreignId('pedido_id')->constrained();
            $table->primary(['chambeador_id', 'pedido_id']);
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
