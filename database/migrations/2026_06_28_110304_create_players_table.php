<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {

            $table->id();

            $table->string('nickname')->unique();
            $table->string('real_name')->nullable();

            $table->string('country',5);
            $table->string('team')->nullable();

            $table->string('avatar')->nullable();

            $table->integer('dpi')->default(400);

            $table->decimal('sensitivity',5,2)->default(2.00);

            $table->string('resolution')->default('1280x960');

            $table->integer('refresh_rate')->default(360);

            $table->string('crosshair')->nullable();

            $table->text('autoexec')->nullable();

            $table->string('mouse')->nullable();
            $table->string('keyboard')->nullable();
            $table->string('monitor')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};