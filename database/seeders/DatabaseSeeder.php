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
            ['id' => 1, 'studentnumber' => 'D264663', 'firstname' => 'Bram', 'lastname' => 'van Overveld'],
            ['id' => 2, 'studentnumber' => 'D284849', 'firstname' => 'Anass', 'lastname' => 'Moussadi'],
            ['id' => 3, 'studentnumber' => 'D284126', 'firstname' => 'Gino', 'lastname' => 'Hanemaaijer'],
            ['id' => 4, 'studentnumber' => 'D280651', 'firstname' => 'Ruben', 'lastname' => 'van Beveren'],
            ['id' => 5, 'studentnumber' => 'D274974', 'firstname' => 'Robin', 'lastname' => 'Aué'],
            ['id' => 7, 'studentnumber' => 'D232129', 'firstname' => 'Tommy', 'lastname' => 'Aarts'],
            ['id' => 8, 'studentnumber' => 'D272913', 'firstname' => 'Joey', 'lastname' => 'Belloni'],
            ['id' => 9, 'studentnumber' => 'D284311', 'firstname' => 'Senne', 'lastname' => 'Loos'],
            ['id' => 10, 'studentnumber' => 'D282692', 'firstname' => 'Simon', 'lastname' => 'Klaren'],
            ['id' => 11, 'studentnumber' => 'D283118', 'firstname' => 'Rick', 'lastname' => 'Jansen'],
            ['id' => 12, 'studentnumber' => 'D284132', 'firstname' => 'Tahar', 'lastname' => 'Grira'],
            ['id' => 13, 'studentnumber' => 'D281708', 'firstname' => 'Gylian', 'lastname' => 'Crylaards'],
        ];
        DB::table('students')->insert($users);

    }
}
