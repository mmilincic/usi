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

            $table->char('naziv_kompaije');

            $table->timestamp('vreme_sletanja');

            $table->timestamp('vreme_poletanja');

            $table->foreignId('grad_sletanja');

            $table->foreignId('grad_poletanja');

            $table->bigInteger('administracija_id')->unsigned();
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
