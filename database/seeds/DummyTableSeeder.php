<?php

use Illuminate\Database\Seeder;

class DummyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            DB::table('dummy')->insert([
                'title' => 'title ' . $i,
                'description' => Str::random(100),
            ]);
        }
    }
}
