<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student_list = [
            [
                'nome' => 'Petronaci Diego',
                'data_di_nascita' => '09/01/1999',
                'sesso' => 'M',
            ],
            [
                'nome' => 'Santelli Niccolo',
                'data_di_nascita' => '05/08/1994',
                'sesso' => 'M',
            ],
            [
                'nome' => 'Collo Edoardo',
                'data_di_nascita' => '16/04/1990',
                'sesso' => 'M',
            ]
        ];

        foreach ($student_list as $student) {
            $newStudent = new Student();
            $newStudent->nome = $student['nome'];
            $newStudent->data_di_nascita = $student['data_di_nascita'];
            $newStudent->sesso = $student['sesso'];
            $newStudent->save();
        }
    }
}
