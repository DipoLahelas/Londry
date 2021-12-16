<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id("id_transaksi");
            $table->string("nama");
            $table->string("alamat");
            $table->string("hp");
            $table->string("email");
            $table->date("tanggal");
            $table->string("berat")->nullable();
            $table->string("tipe");
            $table->string("h_laundry")->nullable();
            $table->string("ongkir")->nullable();
            $table->string("h_total")->nullable();
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
        Schema::dropIfExists('details');
    }
}
