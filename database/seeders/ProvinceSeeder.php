<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;
class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Province::factory()
        ->count(5)
        ->create();
    }
}
