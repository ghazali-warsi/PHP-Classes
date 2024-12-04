<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function EmpData(Request $req)
    {
     
        $req->validate(
            [
                "name"=>'required|min:10',
                "email" =>'required|email',
                // "age" =>'required|numeric|between:18,22',
                "age" =>'required|numeric|max:18',
                "password" =>'required|alpha_num'
            ]
            );

     return $req;
    }
}
