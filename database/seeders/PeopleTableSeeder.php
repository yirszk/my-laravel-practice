<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'John',
            'mail' => 'john@mail.com',
            'age' => '28',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'Michael',
            'mail' => 'michael@mail.com',
            'age' => '33',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'Mary',
            'mail' => 'mary@mail.com',
            'age' => '26',
        ];
        DB::table('people')->insert($param);
    }
}
