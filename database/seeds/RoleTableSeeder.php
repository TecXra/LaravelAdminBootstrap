<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\LaraAdmin\Models\Role::create([
			'role_name' => 'admin',
			
		]);

		\App\LaraAdmin\Models\Role::create([
			'role_name' => 'user',
			
		]);





    }
}
