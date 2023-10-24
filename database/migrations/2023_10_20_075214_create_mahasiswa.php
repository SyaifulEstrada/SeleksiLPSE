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
       Schema::create('mahasiswa', function(Blueprint $table) {
        $table->integer('nim')->primary();
        $table->string('nama');
        $table->string('alamat');
        $table->enum('jekel', ['laki-laki', 'perempuan']);
        $table->unsignedBigInteger('id_jurusan')->index();
        $table->foreign('id_jurusan')->references('id_jurusan')->on('jurusan')->onUpdate('cascade')->onDelete('cascade');
        $table->timestamps();
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
