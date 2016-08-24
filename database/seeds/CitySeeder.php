<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\LaraAdmin\Models\City::create([
			'city_name' => 'Statin Island',
			'city_zipcode'=>'19406',
			'state_id'=>1,
			]);

        \App\LaraAdmin\Models\City::create([
			'city_name' => 'New York City',
			'city_zipcode'=>'19500',
			'state_id'=>1,
			]);


        \App\LaraAdmin\Models\City::create([
			'city_name' => 'Manhattan',
			'city_zipcode'=>'19560',
			'state_id'=>1,
			]);
    }
}
