<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('fee',20,2);
            $table->string('atas_nama');
            $table->bigInteger('booking_id')->unsigned();
            $table->bigInteger('payment_option_id')->unsigned();
            $table->string('bukti_transfer');
            $table->enum('validation', ['Proses Validasi','Valid', 'Tidak Valid'])->default('Proses Validasi');
            $table->foreign('booking_id')->references('id')->on('bookings')->onUpdate('cascade')->onDelete('cascade');           
            $table->foreign('payment_option_id')->references('id')->on('payment_options')->onUpdate('cascade')->onDelete('cascade');       
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
        Schema::dropIfExists('payments');
    }
}
