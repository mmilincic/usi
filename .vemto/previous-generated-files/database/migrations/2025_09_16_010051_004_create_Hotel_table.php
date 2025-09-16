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
        Schema::create('Hotel', function (Blueprint $table) {
            $table
                ->bigInteger('hotel_id')
                ->unsigned()
                ->autoIncrement();

            $table->char('naziv');

            $table->bigInteger('grad_id')->unsigned();

            $table
                ->foreign('grad_id')
                ->references('grad_id')
                ->on('Grad')
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
        Schema::dropIfExists('Hotel');
    }
};
