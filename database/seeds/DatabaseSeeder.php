<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('cars')->insert([
            'make' => str_random(4),
            'model' => str_random(4),
            'produced_on' => Carbon::parse('2000-01-01')
        ]);
    }
}
