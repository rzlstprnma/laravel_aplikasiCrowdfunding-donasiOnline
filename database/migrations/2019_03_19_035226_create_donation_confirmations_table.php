<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_confirmations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('program_id');
            $table->integer('users_id');
            $table->string('id_transaksi', 10);
            $table->string('nama_donatur', 100);
            $table->string('email', 100);
            $table->integer('nominal_donasi');
            $table->text('dukungan');
            $table->string('bukti_pembayaran', 200);
            $table->tinyInteger('isVerified')->default(0);
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
        Schema::dropIfExists('donation_confirmations');
    }
}
