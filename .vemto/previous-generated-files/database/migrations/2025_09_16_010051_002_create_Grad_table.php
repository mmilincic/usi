<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Grad', function (Blueprint $table) {
            $table
                ->bigInteger('grad_id')
                ->unsigned()
                ->autoIncrement();

            $table->char('naziv');

            $table->bigInteger('drzava_id')->nullable();

            $table->bigInteger('hotel_id')->unsigned();

            $table->bigInteger('grad_sletanja')->unsigned();

            $table
                ->foreign('drzava_id')
                ->references('drzava_id')
                ->on('Drzava')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Grad');
    }
};
