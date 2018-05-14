<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = App\User::create([
        	'first_name'=>"Dilmurod",
        	'last_name'=>"Valiev",
        	'email'=>"admin@gmail.com",
        	'password'=>bcrypt("admin123"),
           'admin'=>1
        ]);

        App\Profile::create([
            'user_id'=>$user->id,
            'city'=>"Samarkand",
            'country'=>"Uzbekistan"
        ]);
    }
}
