<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('model');
            $table->string('made_year');
            $table->string('status')->default('In Use');
            $table->foreignId('user_id')->constrained();
            // $table->integer('customer_id')->unsigned();
            $table->datetime('created_at')->useCurrent();
            $table->datetime('updated_at')->useCurrent();
            
            // $table->foreign('customer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
