<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(100)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory()->createMany(
        //     [
        //         [
        //             'email' => 'test1@example.com'
        //         ],
        //         [
        //             'email' => 'test2@example.com'
        //         ],
        //         [
        //             'email' => 'test3@example.com'
        //         ],
        //     ]
        // );

        // $user = new User();
        // $user->name = 'Test User';
        // $user->email = 'test@example.com';
        // $user->password = 'password';
        // $user->save();

        // User::create([
        //     'name' => 'Test User Tow',
        //     'email' => 'test2@example.com',
        //     'password' => 'password'
        // ]);

        // $users = [
        //     [
        //         'name' => 'User One',
        //         'email' => 'one@example.com',
        //         'password' => 'password'

        //     ],
        //     [
        //         'name' => 'User Two',
        //         'email' => 'two@example.com',
        //         'password' => 'password'

        //     ],
        //     [
        //         'name' => 'User Three',
        //         'email' => 'three@example.com',
        //         'password' => 'password'

        //     ],
        //     [
        //         'name' => 'User Four',
        //         'email' => 'four@example.com',
        //         'password' => 'password'

        //     ],
        //     [
        //         'name' => 'User Five',
        //         'email' => 'five@example.com',
        //         'password' => 'password'

        //     ],
        // ];

        // foreach ($users as $user) {
        //     User::create($user);
        // }
    }
}
