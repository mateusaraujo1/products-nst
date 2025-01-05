<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Mateus',
            'last_name' => 'Araújo',
            'email' => 'contato@mateus.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
