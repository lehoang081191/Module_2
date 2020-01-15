<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <40 ; $i++) {
            DB::table('students')->insert([
                'name' => 'Hoang' . Str::random(2),
                'description' => Str::random(80),
                'groupId' => 1
        ]);
        }
    }
}
