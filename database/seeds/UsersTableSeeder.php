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
            DB::table('users')->insert(
                [
                    'name' => 'User_1',
                    'email' => 'user_1@mymail.com',
                    'password' => bcrypt('123456'),
                    'idComment' => rand(1,100),
                    'level'=> 0,
                    'quyen'=>0
                ],
                [
                    'name' => 'User_2',
                    'email' => 'user_2@mymail.com',
                    'password' => bcrypt('123456'),
                    'idComment' => rand(1,100),
                    'level'=> 0,
                    'quyen'=>0
                ],
                [
                    'name' => 'User_3',
                    'email' => 'user_3@mymail.com',
                    'password' => bcrypt('123456'),
                    'idComment' => rand(1,100),
                    'level'=> 0,
                    'quyen'=>0
                ],
                [
                    'name' => 'User_4',
                    'email' => 'user_4@mymail.com',
                    'password' => bcrypt('123456'),
                    'idComment' => rand(1,100),
                    'level'=> 0,
                    'quyen'=>0
                ],
                [
                    'name' => 'User_5',
                    'email' => 'user_5@mymail.com',
                    'password' => bcrypt('123456'),
                    'idComment' => rand(1,100),
                    'level'=> 0,
                    'quyen'=>0
                ],
                [
                    'name' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt('123456'),
                    'idComment' => rand(1,100),
                    'level'=> 0,
                    'quyen'=>1
                ]
            );
        
    }
}
