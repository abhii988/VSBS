<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('part');
            $table->string('quantity');
            $table->string('price');
            $table->string('status')->default('In Stock');
            $table->foreignId('service_id')->constrained();
            // $table->integer('service_id')->unsigned();
            $table->datetime('created_at')->useCurrent();
            $table->datetime('updated_at')->useCurrent();
            
            // $table->foreign('service_id')->references('id')->on('service');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
