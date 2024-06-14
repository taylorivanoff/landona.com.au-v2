<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Taylor Ivanoff',
                'email' => 'taylorivanoff@gmail.com',
                'password' => bcrypt('Unsoiled-Mascot-Update-Expand-Winnings5'),
                'role' => 'admin',
            ],
            [
                'name' => 'Maddy Ivanoff',
                'email' => 'maddy@landona.com.au',
                'password' => bcrypt('Protegee7-Catnip-Barbecue'),
                'role' => 'admin',
            ],
            [
                'name' => 'Tina Randall',
                'email' => 'tina@landona.com.au',
                'password' => bcrypt('Galleria3-Strength-Frisbee'),
                'role' => 'admin',
            ],
        ];

        foreach ($users as $userData) {
            User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => $userData['password'],
                    'role' => $userData['role'],
                ]
            );
        }
    }
}
