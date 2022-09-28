<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['id' => 1, 'studentnumber' => 'D284663', 'firstname' => 'Bram', 'lastname' => 'van Overveld'],
            ['id' => 2, 'studentnumber' => 'D284849', 'firstname' => 'Anass', 'lastname' => 'Moussadi'],
            ['id' => 3, 'studentnumber' => 'D284126', 'firstname' => 'Gino', 'lastname' => 'Hanemaaijer'],
            ['id' => 4, 'studentnumber' => 'D280651', 'firstname' => 'Ruben', 'lastname' => 'van Beveren'],
            ['id' => 5, 'studentnumber' => 'D274974', 'firstname' => 'Robin', 'lastname' => 'Aué'],
            ['id' => 6, 'studentnumber' => 'D232129', 'firstname' => 'Tommy', 'lastname' => 'Aarts'],
            ['id' => 7, 'studentnumber' => 'D272913', 'firstname' => 'Joey', 'lastname' => 'Belloni'],
            ['id' => 8, 'studentnumber' => 'D284311', 'firstname' => 'Senne', 'lastname' => 'Loos'],
            ['id' => 9, 'studentnumber' => 'D282692', 'firstname' => 'Simon', 'lastname' => 'Klaren'],
            ['id' => 10, 'studentnumber' => 'D283118', 'firstname' => 'Rick', 'lastname' => 'Jansen'],
            ['id' => 11, 'studentnumber' => 'D284132', 'firstname' => 'Tahar', 'lastname' => 'Grira'],
            ['id' => 12, 'studentnumber' => 'D281708', 'firstname' => 'Gylian', 'lastname' => 'Crylaards'],
        ];
        DB::table('students')->insert($users);

        $questions = [
            ['id' => 1, 'question' => '','studentnumber' => 'D284663',  'student_id' => '1',],
            ['id' => 2, 'question' => '','studentnumber' => 'D284849',  'student_id' => '2',],
            ['id' => 3, 'question' => '','studentnumber' => 'D284126', 'student_id' => '3',],
            ['id' => 4, 'question' => '','studentnumber' => 'D280651', 'student_id' => '4',],
            ['id' => 5, 'question' => '','studentnumber' => 'D274974', 'student_id' => '5',],
            ['id' => 6, 'question' => '','studentnumber' => 'D232129', 'student_id' => '6',],
            ['id' => 7, 'question' => '','studentnumber' => 'D272913', 'student_id' => '7',],
            ['id' => 8, 'question' => '','studentnumber' => 'D284311', 'student_id' => '8',],
            ['id' => 9, 'question' => '','studentnumber' => 'D282692', 'student_id' => '9',],
            ['id' => 10, 'question' => '','studentnumber' => 'D283118', 'student_id' => '10',],
            ['id' => 11, 'question' => 'test','studentnumber' => 'D284132', 'student_id' => '11',],
            ['id' => 12, 'question' => '','studentnumber' => 'D281708', 'student_id' => '12',],


        ];
    
        DB::table('questions')->insert($questions);
        $scores = [
            ['students_id' => 1],
            ['students_id' => 2],
            ['students_id' => 3],
            ['students_id' => 4],
            ['students_id' => 5],
            ['students_id' => 6],
            ['students_id' => 7],
            ['students_id' => 8],
            ['students_id' => 9],
            ['students_id' => 10],
            ['students_id' => 11],
            ['students_id' => 12],
        ];
        DB::table('scores')->insert($scores);
    }
}
