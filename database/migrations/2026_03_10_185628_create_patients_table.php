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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cns');
            $table->foreignId('file_cns_id')->nullable();
            $table->string('document_type');
            $table->string('document');
            $table->foreignId('file_document_id')->nullable();
            $table->string('sigadoc');
            $table->timestamp('birth_date');
            $table->string('gender');
            $table->boolean('newborn')->nullable();
            $table->string('race');
            $table->string('ethnicity')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('naturalness')->nullable();
            $table->string('phone')->nullable();
            $table->string('cell_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('profession')->nullable();
            $table->string('deficiency')->nullable();
            $table->foreignId('file_deficiency_id')->nullable();
            $table->string('cep');
            $table->string('address');
            $table->foreignId('file_address_id')->nullable();
            $table->string('number');
            $table->string('complement')->nullable();
            $table->string('neighborhood');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
