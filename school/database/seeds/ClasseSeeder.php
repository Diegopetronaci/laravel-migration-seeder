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
        $class_list = config('class_list');

        foreach ($class_list as $student) {
            $newClass = new Classe();
            $newClass->numero = $student['numero'];
            $newClass->piano = $student['piano'];
            $newClass->max_studenti = $student['max_studenti'];
            $newClass->save();
        }
    }
}
