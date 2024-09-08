<?php

use App\Models\JenisSertifikat;
use App\Models\Peserta;
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
        Schema::create('sertifikat', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 100)->unique();
            $table->foreignIdFor(Peserta::class);
            $table->foreignIdFor(JenisSertifikat::class);
            $table->string('filename')->unique();
            $table->date('expired')->nullable();
            $table->enum('tipe', ['attendance', 'kelulusan']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikat');
    }
};
