<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $faker =Faker::create();
          foreach(range(1,30) as $key){
            \App\User::create([
              'email'=>$faker->email(),
              'name'=>$faker->name(),
              'password'=>bcrypt(12345)
            ]);
          }
    }
}
