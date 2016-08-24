<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\LaraAdmin\Models\Country::create([
			'country_name' => 'America',
		]);

\App\LaraAdmin\Models\Country::create([
			'country_name' => 'China',
		]);
\App\LaraAdmin\Models\Country::create([
			'country_name' => 'England',
		]);
\App\LaraAdmin\Models\Country::create([
			'country_name' => 'Dubai',
		]);


    }
}
