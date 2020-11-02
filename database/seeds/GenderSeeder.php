<?php

use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Models\Gender::class, 5)->create();
        \App\Models\Gender::create([
            'name' => 'Hombre'
        ]);

        \App\Models\Gender::create([
            'name' => 'Mujer'
        ]);

        \App\Models\Gender::create([
            'name' => 'Otro'
        ]);
    }
}
