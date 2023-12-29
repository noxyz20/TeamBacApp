<?php

namespace Database\Seeders;

use App\Models\SquadRoles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SquadRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SquadRoles::insert([
            [
                'name' => 'Squad Leader',
                'image' => '/roles/sl.png'
            ],
            [
                'name' => 'Grenadier',
                'image' => '/roles/granata.png'
            ],
            [
                'name' => 'Pilot',
                'image' => '/roles/heli.png'
            ],
            [
                'name' => 'Pilot Leader',
                'image' => '/roles/helo_lead.png'
            ],
            [
                'name' => 'Crewman',
                'image' => '/roles/crew.png'
            ],
            [
                'name' => 'Crewman Leader',
                'image' => '/roles/crew_lead.png'
            ],
            [
                'name' => 'Anti Tank Lourd',
                'image' => '/roles/hat.png'
            ],
            [
                'name' => 'Anti Tank',
                'image' => '/roles/at.png'
            ],
            [
                'name' => 'Riffle Man',
                'image' => '/roles/riffle.png'
            ],
            [
                'name' => 'Team Leader',
                'image' => '/roles/tl.png'
            ],
            [
                'name' => 'Medic',
                'image' => '/roles/medic.png'
            ],
            [
                'name' => 'Machine Gunner',
                'image' => '/roles/mg.png'
            ],
            [
                'name' => 'Machine Gunner Lourd',
                'image' => '/roles/hmg.png'
            ],
            [
                'name' => 'Ingenieur',
                'image' => '/roles/inge.png'
            ]
        ]);
    }
}
