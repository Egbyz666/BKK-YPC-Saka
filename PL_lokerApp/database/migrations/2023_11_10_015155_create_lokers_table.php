<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokers', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('name');
            $table->string('namaPerusahaan');
            $table->string('jenisLoker')->unique();
            $table->string('gaji');
            $table->text('deskripsiLoker');
            $table->text('foto');
            $table->enum('status',['Disetujui','Ditangguhkan']);
            $table->timestamps();
            $table->foreign('nis')->references('nis')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('name')->references('name')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokers');
    }
}
