<?php

use Illuminate\Database\Seeder;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
			DB::table('users')->insert([
				'name' => "Admin",
				'email' => 'admin@vdirect.com',
				'user_type' => "admin",
				'password' => Hash::make('admin'),
			]);

    }

}
