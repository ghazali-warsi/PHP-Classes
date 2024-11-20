<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        for($x=1; $x<50; $x++)
        {
         Employee::create(
            [
           "Name" => fake()->name(),
           "Email" =>fake()->email(),
           "Contact" => fake()->phoneNumber()
            ]);
        };


        // Employee::create(
        //     [
        //         "Name" => "Aqeel",
        //         "Email" => "gujjar@gmail.com",
        //         "Contact" => "03126547895"
        //     ]
        // );

        // $employee = collect(
        //     [
        //         [
        //         "Name" => "Aqeel",
        //         "Email" => "gujjar@gmail.com",
        //         "Contact" => "03126547895"
        //         ],
        //         [
        //             "Name" => "Aliyan",
        //             "Email" => "ali@gmail.com",
        //             "Contact" => "03126547895"
        //             ],
        //             [
        //                 "Name" => "Daniyal",
        //                 "Email" => "dani@gmail.com",
        //                 "Contact" => "03126547895"
        //                 ],
        //                 [
        //                     "Name" => "Ebad",
        //                     "Email" => "bangali@gmail.com",
        //                     "Contact" => "03126547895"
        //                     ],
        //                     [
        //                         "Name" => "hammad",
        //                         "Email" => "biscuit@gmail.com",
        //                         "Contact" => "03126547895"
        //                         ],
        //     ]);

        //     $employee->each(function($emp)
        // { 
        //     Employee::insert($emp);

        // });

        // $json = File::get(path:"database/json/employee.json");
        // $emp = collect(json_decode($json));

        // $emp->each(function($val)
        // {
        //     Employee::insert(
        //         [
        //             "Name" => $val->Name,
        //             "Email" => $val->Email,
        //             "Contact" => $val->Contact
        //         ]
        //     );
        // });


        

    }
}
