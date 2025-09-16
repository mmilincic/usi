<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederHotela extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel')->insert([
            ['hotel_id' => 1, 'naziv' => 'Hotel Central',        'grad_id' => 1],
            ['hotel_id' => 2, 'naziv' => 'Hotel Palace',         'grad_id' => 1],
            ['hotel_id' => 3, 'naziv' => 'Hotel Novi Sad',       'grad_id' => 2],
            ['hotel_id' => 4, 'naziv' => 'Hotel Niš',            'grad_id' => 3],
            ['hotel_id' => 5, 'naziv' => 'Hotel Podgorica',      'grad_id' => 4],
            ['hotel_id' => 6, 'naziv' => 'Hotel Sarajevo',       'grad_id' => 6],
            ['hotel_id' => 7, 'naziv' => 'Hotel Mostar',         'grad_id' => 7],
            ['hotel_id' => 8, 'naziv' => 'Hotel Zagreb',         'grad_id' => 8],
            ['hotel_id' => 9, 'naziv' => 'Hotel Split',          'grad_id' => 9],
            ['hotel_id' => 10,'naziv' => 'Hotel Ljubljana',      'grad_id' => 10],
            ['hotel_id' => 11,'naziv' => 'Hotel Skoplje',        'grad_id' => 11],
            ['hotel_id' => 12,'naziv' => 'Hotel Sofia',          'grad_id' => 12],
            ['hotel_id' => 13,'naziv' => 'Hotel Bukurešt',       'grad_id' => 13],
            ['hotel_id' => 14,'naziv' => 'Hotel Budimpešta',     'grad_id' => 14],
            ['hotel_id' => 15,'naziv' => 'Hotel Beč',            'grad_id' => 15],
        ]);
    }
}
