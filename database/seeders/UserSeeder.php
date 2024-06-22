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
        //
        $superAdmin = [
            [
                'name' => 'Bogdan',
                'surname' => 'Vieriu',
                'email' => 'vieriubogdan@yahoo.it',
                'password' => Hash::make('=1mf523vF\%)@L3Z'),
                'email_verified_at' => now()
            ]
        ];

        foreach ($superAdmin as $sueprAdmin) {
            $user = User::updateOrCreate(
                [
                    'email' => 'vieriubogdan@yahoo.it',
                ],
                $sueprAdmin
            );
            $user->assignRole('super_admin');
        }
    }
}
