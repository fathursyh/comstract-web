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
        Schema::create('jenis_sertifikat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('batch', unsigned: true);
            $table->string('mitra')->nullable();
            $table->date('pelaksanaan');
            $table->string('flyer')->unique();
            $table->boolean('open');

            $table->unique(['nama', 'batch']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_sertifikat');
    }
};
