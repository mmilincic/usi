<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Korisnik', function (Blueprint $table) {
            $table->bigIncrements('korisnik_id');
            $table->string('puno_ime');
            $table->string('drzavljanstvo');
            $table->string('email')->unique();
            $table->timestamp('datum_rodjenja')->nullable();
            $table->string('lozinka');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_korisnik');
    }
};
