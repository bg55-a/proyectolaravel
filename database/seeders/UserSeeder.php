<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'address' => 'tecnologico de tlaxiaco',
            'phone' => '9531613205',
            'password' => Hash::make('admin123'),
        ]);
        User::create([
            'name' => 'adolfo vasquez',
            'email' => 'vasquez@gmail.com',
            'address' => 'tecnologico de tlaxiaco',
            'phone' => '9532762040',
            'password' => Hash::make('german123'),
        ]);
    }
}
