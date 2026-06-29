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
        Schema::create('crosshairs', function (Blueprint $table) {
            $table->id();

$table->foreignId('player_id')->constrained()->cascadeOnDelete();

$table->string('name');

$table->text('code');

$table->string('color')->nullable();

$table->integer('size')->default(2);

$table->integer('gap')->default(-3);

$table->integer('thickness')->default(1);

$table->boolean('outline')->default(false);

$table->boolean('dot')->default(false);

$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crosshairs');
    }
};
