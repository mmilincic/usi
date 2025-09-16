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
        Schema::rename('users', 'Korisnik');

        Schema::table('Korisnik', function (Blueprint $table) {
            $table->dropUnique(['drzavljanstvo']);
            $table->renameColumn('id', 'korisnik_id');
            $table->renameColumn('name', 'puno_ime');
            $table->renameColumn('email', 'drzavljanstvo');
            $table->renameColumn('email_verified_at', 'datum_rodjenja');
            $table->renameColumn('password', 'lozinka');
            $table->renameColumn('remember_token', 'email');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Korisnik', function (Blueprint $table) {
            $table->unique('drzavljanstvo');
            $table->renameColumn('korisnik_id', 'id');
            $table->renameColumn('puno_ime', 'name');
            $table->renameColumn('drzavljanstvo', 'email');
            $table->renameColumn('datum_rodjenja', 'email_verified_at');
            $table->renameColumn('lozinka', 'password');
            $table->renameColumn('email', 'remember_token');

            $table
                ->timestamp('created_at')
                ->nullable()
                ->after('email');

            $table
                ->timestamp('updated_at')
                ->nullable()
                ->after('created_at');
        });
        Schema::rename('Korisnik', 'users');
    }
};
