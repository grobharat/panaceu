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
        Schema::create('business_entity_details', function (Blueprint $table) {
            $table->id();
            $table->integer('parameter_id');
            $table->string('parameter_value');
            $table->foreignId('business_entity_id')->constrained('business_entities')->onDelete('cascade');
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tehsils');
    }
};
