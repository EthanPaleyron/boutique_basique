<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('commands_line', function (Blueprint $table) {
            $table->id();
            $table->foreignId('command_id');
            $table->string('article');
            $table->integer('quantity');
            $table->float('price');
            $table->boolean('basket');
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
