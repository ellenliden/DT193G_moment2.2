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
        Schema::create('ceramics', function (Blueprint $table) {
            $table->id();
                    $table->string('name');
        $table->string('clay_type');
        $table->integer('weight_grams');
        $table->boolean('glazed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ceramics');
    }
};
