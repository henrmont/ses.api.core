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
        Schema::create('patient_cares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->foreignId('module_id');
            $table->boolean('is_valid')->default(true);
            $table->foreignId('user_id')->nullable();
            $table->string('back_to_user')->nullable();
            $table->boolean('is_archived')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_cares');
    }
};
