<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Add calls to Seeders here
        $this->call(UserTableSeeder::class);
        $this->command->info('Admin User created with username admin@admin.com and password admin');
        $this->command->info('Test User created with username user@user.com and password user');
		$this->call(RoleTableSeeder::class);
        $this->call(PivotTableSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(AddressSeeder::class);


        Model::reguard();
    }
}
