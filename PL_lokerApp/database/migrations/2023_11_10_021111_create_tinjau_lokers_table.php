<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinjauLokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinjau_lokers', function (Blueprint $table) {
            $table->integer('idTinjau');
            $table->integer('idLoker');
            $table->enum('tinjau',['Posting','Tangguhkan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tinjau_lokers');
    }
}
