<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('bill');
            $table->string('status')->default('Active');
            $table->foreignId('booking_id')->constrained('bookings');
            // $table->integer('booking_id')->unsigned();
            $table->datetime('created_at')->useCurrent();
            $table->datetime('updated_at')->useCurrent();
            
            // $table->foreign('booking_id')->references('id')->on('bookings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
