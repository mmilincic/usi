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
        Schema::create('Let', function (Blueprint $table) {
            $table
                ->bigInteger('let_id')
                ->unsigned()
                ->autoIncrement();

            $table->dateTime('vreme_poletanja')->nullable();

            $table->dateTime('vreme_sletanja')->nullable();

            $table->bigInteger('grad_sletanja');

            $table->bigInteger('grad_poletanja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Let');
    }
};
