<?php

use Illuminate\Database\Seeder;

class PigeonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Pigeon::class, 100)->create();
    }
}
