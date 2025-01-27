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
        Schema::create('categorias_locais', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); 
            $table->timestamps();
        });
        
        
        Schema::table('locais', function (Blueprint $table) {
            $table->foreignId('categoria_id')->nullable()->constrained('categorias_locais')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_locais');
    }
};
