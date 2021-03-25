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
            $table->id();
            $table->date('date');
            $table->string('vehicle');
            $table->integer('vehicle_km');
            $table->string('booking_desc');
            $table->string('status')->default('Active');
            $table->foreignId('user_id')->constrained();
            // $table->integer('users_id')->unsigned();
            $table->timestamps();
            // $table->datetime('created_at')->useCurrent();
            // $table->datetime('updated_at')->useCurrent();
            
            // $table->foreign('users_id')->references('id')->on('Users')->onUpdate('cascade')->onDelete('cascade');
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
