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
        Schema::create('partner', function (Blueprint $table) {
            $table->id();
            $table->string('image_name')->nullable()->default(null);
            $table->string('button_link')->nullable()->default(null);
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('is_delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner');
    }
};
