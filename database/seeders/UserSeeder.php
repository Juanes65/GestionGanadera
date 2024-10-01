<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Juan',
            'apellido' => 'Florez',
            'cedula' => '123456789',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('7019')
        ]);

        $users = [];
        for ($i = 1; $i <= 99; $i++) {
            $users[] = [
                'name' => 'User ' . $i,
                'apellido' => 'Apellido ' . $i,
                'cedula' => str_pad($i, 9, '0', STR_PAD_LEFT),
                'email' => 'user' . $i . '@example.com',
                'password' => bcrypt('password' . $i),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($users);
    }
}
