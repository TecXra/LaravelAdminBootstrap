<?php

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\LaraAdmin\Models\State::create([
			'state_name' => 'California',
			'state_code'=>'CA',
			'country_id'=>1,
			]);

\App\LaraAdmin\Models\State::create([
			'state_name' => 'New York',
			'state_code'=>'NY',
			'country_id'=>1,
			]);


\App\LaraAdmin\Models\State::create([
			'state_name' => 'New Jersei',
			'state_code'=>'NJ',
			'country_id'=>1,
			]);



    }
}
