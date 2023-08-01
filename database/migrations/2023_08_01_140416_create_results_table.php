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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('name_of_mother')->nullable();
            $table->string('area')->nullable();
            $table->string('behavior')->nullable();
            $table->string('natig_safy')->nullable();
            $table->string('natig_camel')->nullable();
            $table->string('result')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('math')->nullable();
            $table->string('physics')->nullable();
            $table->string('chemistry')->nullable();
            $table->string('drawing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
