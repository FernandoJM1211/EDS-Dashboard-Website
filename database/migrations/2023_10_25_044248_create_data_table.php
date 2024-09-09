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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_permohonan');
            $table->string('nama_badan_hukum');
            $table->string('nama_perusahaan');
            $table->string('jenis_badan_hukum');
            $table->string('sistem_elektronik');
            $table->string('website');
            $table->string('sektor');
            $table->string('tdpse');
            $table->date('tanggal_publish');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('data_pemohon');
            $table->integer('nib');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
