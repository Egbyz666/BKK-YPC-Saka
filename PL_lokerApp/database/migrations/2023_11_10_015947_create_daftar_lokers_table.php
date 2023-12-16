<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarLokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_lokers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('jenisLoker');
            $table->text('pernyataan');
            $table->enum('status',['Disetujui','Proses','Ditangguhkan']);
            $table->timestamps();
            $table->foreign('jenisLoker')->references('jenisLoker')->on('lokers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_lokers');
    }
}
