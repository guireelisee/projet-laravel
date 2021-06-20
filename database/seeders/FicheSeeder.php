<?php

namespace Database\Seeders;

use App\Models\Fiche;
use Illuminate\Database\Seeder;

class FicheSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $fiches = [
            [
                'numero_enreg'=>'400',
                'date_arrivee'=>'2000-06-14',
                'nom_exp'=>'GUIRE',
                'prenom_exp'=>'Elisée',
                'sp_instructions'=>'',
                'dir_instructions'=>'',
                'autres_instructions'=>'',
                'decision'=>'1',
                'proposition'=>'',
            ],
            [
                'numero_enreg'=>'100',
                'date_arrivee'=>'2020-05-19',
                'nom_exp'=>'KUELA',
                'prenom_exp'=>'Elisée',
                'sp_instructions'=>'pour avis du directeur',
                'dir_instructions'=>'remettre à la scolarité',
                'autres_instructions'=>'',
                'decision'=>'0',
                'proposition'=>'salle indisponible',
            ],
        ];

        foreach ($fiches as $key => $val) {
            Fiche::create($val);
        }
    }
}
