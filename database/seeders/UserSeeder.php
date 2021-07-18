<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        User::create([
            'nom' => 'admin',
            'prenom' => 'admin',
            'email' => 'admin@admin.com',
            'role_id' => 1,
            'password' => Hash::make('passer123')
        ]);

    }
}
