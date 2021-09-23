<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
           dump($i);
        
            User::create([
                'name' => "test$i",
                'email' => "test$i@gmail.com",
                'password' => Hash::make('qqq111'),
                'password_raw' => 'qqq111',
                'device_id' => "$i"."ECBB56A-2636-4BBD-9786-6BE8BE36456D",
                'login_status' => false,
            ]);
       }
    }
}
