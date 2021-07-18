<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Administrateur',
            'BackOffice',
            'Candidat'
        ];
        
     foreach ($roles as $role) {
            \App\Models\Role::create([
                'libelle' => $role
                
            ]);
    }
	}
}
