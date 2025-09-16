<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederGradova extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grad')->insert([
            ['grad_id' => 1, 'naziv' => 'Beograd',       'drzava_id' => 1],
            ['grad_id' => 2, 'naziv' => 'Novi Sad',      'drzava_id' => 1],
            ['grad_id' => 3, 'naziv' => 'Niš',           'drzava_id' => 1],
            ['grad_id' => 4, 'naziv' => 'Podgorica',     'drzava_id' => 2],
            ['grad_id' => 5, 'naziv' => 'Podgorica II',  'drzava_id' => 2],
            ['grad_id' => 6, 'naziv' => 'Sarajevo',      'drzava_id' => 3],
            ['grad_id' => 7, 'naziv' => 'Mostar',        'drzava_id' => 3],
            ['grad_id' => 8, 'naziv' => 'Zagreb',        'drzava_id' => 4],
            ['grad_id' => 9, 'naziv' => 'Split',         'drzava_id' => 4],
            ['grad_id' => 10,'naziv' => 'Ljubljana',     'drzava_id' => 5],
            ['grad_id' => 11,'naziv' => 'Skoplje',       'drzava_id' => 6],
            ['grad_id' => 12,'naziv' => 'Sofia',         'drzava_id' => 8],
            ['grad_id' => 13,'naziv' => 'Bukurešt',      'drzava_id' => 9],
            ['grad_id' => 14,'naziv' => 'Budimpešta',    'drzava_id' => 10],
            ['grad_id' => 15,'naziv' => 'Beč',           'drzava_id' => 11],
        ]);
    }
}
