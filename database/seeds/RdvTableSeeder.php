<?php

use Illuminate\Database\Seeder;

class RdvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Rdv::class, 20)->create();
    }
}
