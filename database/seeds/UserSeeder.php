<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'id' => 1,
                'lname' => 'Ajoc',
                'fname' => 'Jay',
                'address' => 'Bohol',
                'phone' => '09245125',
                'email' => 'Jay@email.com',
                'password' => bcrypt('Jay')
            ],
            [
                'id' => 2,
                'lname' => 'King',
                'fname' => 'Ramos',
                'address' => 'Cadana',
                'phone' => '02144124',
                'email' => 'King@email.com',
                'password' => bcrypt('King')
            ],
            [
                'id' => 3,
                'lname' => 'Chery',
                'fname' => 'Blossom',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Blossom@email.com',
                'password' => bcrypt('Blossom')
            ],
        ];
        foreach ($user_list as $user) {
            User::create($user);

        }
    }
}
