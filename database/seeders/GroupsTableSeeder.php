<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('groups')->insert([
            [
                'id' => 1,
                'name' => '致死的、悪性'
            ],
            [
                'id' => 2,
                'name' => '独創的な、発想力に富んだ'
            ],
            [
                'id' => 3,
                'name' => '買収'
            ],
        ]);
    }
}
