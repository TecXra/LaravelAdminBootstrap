<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\LaraAdmin\Models\Profile::create([
			'user_id' => 1,
			
		]);

       \App\LaraAdmin\Models\Profile::create([
			'user_id' => 2,
			
		]);



    }
}
