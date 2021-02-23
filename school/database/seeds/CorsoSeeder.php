<?php

use App\Corso;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;


class CorsoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    /* $corso_list = [
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
    ]; */

    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newCorso = new Corso();
            $newCorso->nome = $faker->name();
            $newCorso->lezioni = $faker->randomDigit();
            $newCorso->categoria = $faker->word();
            $newCorso->save();
        };
    }
    
}
