<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('booking_code');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->longText('message');
            $table->bigInteger('user_id')->unsigned()->default(0);
            $table->decimal('total', 20,2);
            // $table->bigInteger('payment_option_id')->unsigned()->default(0);
            $table->enum('status', ['Pending', 'Done', 'Cancel'])->default('Pending');
            $table->enum('payment_status', ['Unpaid', 'Paid'])->default('Unpaid');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');           
            // $table->foreign('payment_option_id')->references('id')->on('payment_options')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('bookings');
    }
}
