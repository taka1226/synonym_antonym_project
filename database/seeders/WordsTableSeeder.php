<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('words')->insert([
            [
                'name' => 'malignant',
                'meaning' => '悪性の',
                'synonym_group_id' => 1,
                'antonym_group_id' => NULL,
            ],
            [
                'name' => 'inventive',
                'meaning' => '発想力に富む',
                'synonym_group_id' => 2,
                'antonym_group_id' => NULL,
            ],
            [
                'name' => 'takeover',
                'meaning' => '乗っ取り',
                'synonym_group_id' => 3,
                'antonym_group_id' => NULL,
            ],
        ]);
    }
}
