<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $users = [
            [
                'name' => 'Pluto',
                'email' => 'pluto@gmail.com',
                'password' => Hash::make('pluto'),
            ],
            [
                'name' => 'Topolino',
                'email' => 'topolino@gmail.com',
                'password' => Hash::make('topolino'),
            ],
            [
                'name' => 'Naruto',
                'email' => 'naruto@gmail.com',
                'password' => Hash::make('naruto'),
            ],
            [
                'name' => 'Goku',
                'email' => 'goku@gmail.com',
                'password' => Hash::make('goku'),
            ],
            [
                'name' => 'Gino',
                'email' => 'gino@gmail.com',
                'password' => Hash::make('gino'),
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
