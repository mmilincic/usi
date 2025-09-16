<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SeederLetova extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('let')->insert([
            [
                'naziv_kompanije' => 'Air Serbia',
                'vreme_poletanja' => Carbon::parse('2025-09-20 08:00:00'),
                'vreme_sletanja' => Carbon::parse('2025-09-20 09:30:00'),
                'grad_poletanja'  => 1,
                'grad_sletanja'   => 2,
            ],
            [
                'naziv_kompanije' => 'Lufthansa',
                'vreme_poletanja' => Carbon::parse('2025-09-21 12:00:00'),
                'vreme_sletanja' => Carbon::parse('2025-09-21 14:30:00'),
                'grad_poletanja'  => 12,
                'grad_sletanja'   => 1, 
            ],
            [
                'naziv_kompanije' => 'Ryanair',
                'vreme_poletanja' => Carbon::parse('2025-09-22 15:00:00'),
                'vreme_sletanja' => Carbon::parse('2025-09-22 16:45:00'),
                'grad_poletanja'  => 3,
                'grad_sletanja'   => 8,
            ],
            [
                'naziv_kompanije' => 'WizzAir',
                'vreme_poletanja' => Carbon::parse('2025-09-23 07:30:00'),
                'vreme_sletanja' => Carbon::parse('2025-09-23 09:00:00'),
                'grad_poletanja'  => 5,
                'grad_sletanja'   => 1,
            ],
            [
                'naziv_kompanije' => 'Turkish Airlines',
                'vreme_poletanja' => Carbon::parse('2025-09-24 10:00:00'),
                'vreme_sletanja' => Carbon::parse('2025-09-24 12:30:00'),
                'grad_poletanja'  => 9, 
                'grad_sletanja'   => 13,
            ],
        ]);
    }
}
