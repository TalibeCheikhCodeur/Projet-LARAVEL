<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classe = [
            ['libelle' => 'CI A','niveaux_id' => 1],
            ['libelle' => 'CI B','niveaux_id' => 1],
            ['libelle' => 'CP A','niveaux_id' => 1],
            ['libelle' => 'CP B','niveaux_id' => 1],
            ['libelle' => 'CE1 A','niveaux_id' => 1],
            ['libelle' => 'CE1 B','niveaux_id' => 1],
            ['libelle' => 'CE2 A','niveaux_id' => 1],
            ['libelle' => 'CE2 B','niveaux_id' => 1],
            ['libelle' => 'CM1 A','niveaux_id' => 1],
            ['libelle' => 'CM2 B','niveaux_id' => 1],
            ['libelle' => '6ème A','niveaux_id' => 2],
            ['libelle' => '6ème B','niveaux_id' => 2],
            ['libelle' => '5ème A','niveaux_id' => 2],
            ['libelle' => '4ème B','niveaux_id' => 2],
            ['libelle' => '2ndL B','niveaux_id' => 3],
            ['libelle' => '1èreS A','niveaux_id' => 3],
            ['libelle' => '1èreL B','niveaux_id' => 3],
        ];
        Classe::insert($classe);
    }
}
