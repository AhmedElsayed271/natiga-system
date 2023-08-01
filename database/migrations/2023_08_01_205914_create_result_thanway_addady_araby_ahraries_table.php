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
        Schema::create('result_thanway_addady_araby_ahraries', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('name_of_mother')->nullable();
            $table->string('Result')->nullable();
            $table->string('city')->nullable();
            $table->string('behavior')->nullable();
            $table->string('natig_safy')->nullable();
            $table->string('natig_camel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_thanway_addady_araby_ahraries');
    }
};
