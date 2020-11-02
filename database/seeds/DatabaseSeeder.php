<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ModuleSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(ZoneSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(TypeDocumentSeeder::class);
        $this->call(TypeDocumentSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(CodeValidationSeeder::class);

    }
}
