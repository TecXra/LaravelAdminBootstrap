<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{

		\App\LaraAdmin\Models\User::create([
			'first_name' => 'Ali',
			'last_name' => 'Haider',
			'email' => 'admin@admin.com',
			'password' => bcrypt('admin'),
			
		]);

	
		\App\LaraAdmin\Models\User::create([
			'first_name' => 'Test',
			'last_name' => 'User',
			'email' => 'user@user.com',
			'password' => bcrypt('user'),
			
		]);

	}

}
