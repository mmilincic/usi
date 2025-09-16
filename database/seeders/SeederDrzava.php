<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederDrzava extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('drzava')->insert([
            ['drzava_id' => 1, 'naziv' => 'Srbija',        'alpha3_kod' => 'SRB'],
            ['drzava_id' => 2, 'naziv' => 'Crna Gora',    'alpha3_kod' => 'MNE'],
            ['drzava_id' => 3, 'naziv' => 'Bosna i Hercegovina', 'alpha3_kod' => 'BIH'],
            ['drzava_id' => 4, 'naziv' => 'Hrvatska',     'alpha3_kod' => 'HRV'],
            ['drzava_id' => 5, 'naziv' => 'Slovenija',    'alpha3_kod' => 'SVN'],
            ['drzava_id' => 6, 'naziv' => 'Severna Makedonija', 'alpha3_kod' => 'MKD'],
            ['drzava_id' => 7, 'naziv' => 'Grčka',        'alpha3_kod' => 'GRC'],
            ['drzava_id' => 8, 'naziv' => 'Bugarska',     'alpha3_kod' => 'BGR'],
            ['drzava_id' => 9, 'naziv' => 'Rumunija',     'alpha3_kod' => 'ROU'],
            ['drzava_id' => 10,'naziv' => 'Mađarska',     'alpha3_kod' => 'HUN'],
            ['drzava_id' => 11,'naziv' => 'Austrija',     'alpha3_kod' => 'AUT'],
            ['drzava_id' => 12,'naziv' => 'Nemačka',      'alpha3_kod' => 'DEU'],
            ['drzava_id' => 13,'naziv' => 'Italija',      'alpha3_kod' => 'ITA'],
            ['drzava_id' => 14,'naziv' => 'Francuska',    'alpha3_kod' => 'FRA'],
            ['drzava_id' => 15,'naziv' => 'Španija',      'alpha3_kod' => 'ESP'],
        ]);
    }
}
