<?php

namespace Database\Seeders;

use App\Models\students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = new students();

        $students->studentnumber = "d264663";
        $students->firstname= "Bram";
        $students->lastname = "van Overveld";
        $students->save();


        $students = new students();

        $students->studentnumber = "d284849";
        $students->firstname= "Anass";
        $students->lastname = "Moussadi";
        $students->save();
    }
}
