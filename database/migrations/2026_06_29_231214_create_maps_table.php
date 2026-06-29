<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('maps', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->string('game');

            $table->string('slug')->unique();

            $table->string('image')->nullable();

            $table->text('description')->nullable();

            $table->string('difficulty')->default('Medium');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('maps');
    }
};
