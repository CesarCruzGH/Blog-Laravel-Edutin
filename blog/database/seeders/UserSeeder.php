<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'full_name' => 'Uriel Cruz',
            'email' => 'uriel@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::factory(10)->create();
    }
}
