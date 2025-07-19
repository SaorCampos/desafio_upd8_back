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
        Schema::create('representative', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name', 255)->unique()->notnull();
            $table->char('cnpj', 18)->unique()->notnull();
            $table->string('address', 255)->notnull();
            $table->foreignId('city_id')->constrained('city')->notnull();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representative');
    }
};
