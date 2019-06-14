<?php

use Illuminate\Database\Seeder;

class taskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\task::class, 50)->create();
    }
}
