<?php

use App\Classe;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class_list = [
            [
                'numero' => '209',
                'piano' => '2',
                'max_studenti' => '200',
            ],
            [
                'numero' => '304',
                'piano' => '3',
                'max_studenti' => '305',
            ],
            [
                'numero' => '105',
                'piano' => '1',
                'max_studenti' => '260',
            ]
        ];

        foreach ($class_list as $student) {
            $newClass = new Classe();
            $newClass->numero = $student['numero'];
            $newClass->piano = $student['piano'];
            $newClass->max_studenti = $student['max_studenti'];
            $newClass->save();
        }
    }
}
