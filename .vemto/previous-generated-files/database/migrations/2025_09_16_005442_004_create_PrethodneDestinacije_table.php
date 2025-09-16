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

            $table->bigInteger('korisnik_id');

            $table->bigInteger('let_id');
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
