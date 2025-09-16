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
        Schema::create('PrethodneDestinacije', function (Blueprint $table) {
            $table
                ->bigInteger('pret_id')
                ->unsigned()
                ->autoIncrement();


            $table->bigInteger('let_id')->unsigned();

            $table
                ->foreign('let_id')
                ->references('let_id')
                ->on('Let')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('korisnik_id')->unsigned();

            $table
                ->foreign('korisnik_id')
                ->references('korisnik_id')
                ->on('Korisnik')
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
        Schema::dropIfExists('PrethodneDestinacije');
    }
};
