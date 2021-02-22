<?php

use App\Corso;
use Illuminate\Database\Seeder;

class CorsoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $corso_list = [
            [
                'nome' => 'full-stack',
                'lezioni' => '20',
                'categoria' => 'informatica',
            ],
            [
                'nome' => 'musica-maestro',
                'lezioni' => '7',
                'categoria' => 'Musica',
            ],
            [
                'nome' => 'ave-cesare',
                'lezioni' => '10',
                'categoria' => 'Storia',
            ]
        ];

        foreach ($corso_list as $student) {
            $newClass = new Corso();
            $newClass->nome = $student['nome'];
            $newClass->lezioni = $student['lezioni'];
            $newClass->categoria = $student['categoria'];
            $newClass->save();
        }
    }
}
