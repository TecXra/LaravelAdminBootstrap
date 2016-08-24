<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\LaraAdmin\Models\Address::create([
			
			'profile_id'=>1,
			'country_id'=>1,
			'state_id'=>1,
			'city_id'=>1,
			'address_line_1'=>'House # 404 , Street # 1 ',
			'address_line_2'=>'Flat # 200',
		]);

 \App\LaraAdmin\Models\Address::create([
			
			'profile_id'=>2,
			'country_id'=>1,
			'state_id'=>1,
			'city_id'=>1,
			'address_line_1'=>'House # 007 , Street # 2 ',
			'address_line_2'=>'Flat # 302',
		]);


    }
}
