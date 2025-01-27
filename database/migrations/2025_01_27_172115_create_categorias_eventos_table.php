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
        // Criando a tabela 'categorias_eventos'
        Schema::create('categorias_eventos', function (Blueprint $table) {
            $table->id(); 
            $table->string('nome');  
            $table->foreignId('evento_id')->constrained('eventos')->onDelete('cascade');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    
    }
    
    public function down(): void
    {
        Schema::dropIfExists('categorias_eventos');
    }
};
