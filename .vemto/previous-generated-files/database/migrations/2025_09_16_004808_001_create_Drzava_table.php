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
        Schema::create('Drzava', function (Blueprint $table) {
            $table
                ->bigInteger('drzava_id')
                ->unsigned()
                ->autoIncrement();

            $table->char('naziv');

            $table->char('alpha3_kod');

            $table->bigInteger('grad_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Drzava');
    }
};
