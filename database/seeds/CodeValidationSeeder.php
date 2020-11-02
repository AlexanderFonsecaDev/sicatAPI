<?php

use Illuminate\Database\Seeder;

class CodeValidationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CodeValidation::class, 5)->create();
    }
}
