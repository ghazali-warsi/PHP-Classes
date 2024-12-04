<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function insertUser(Request $req)
    {
      $user = DB::table('users')->insert(
        [
           'Name'=>$req->username,
           'Email'=>$req->useremail,
           'Contact'=>$req->usercontact,         
           'Address'=>$req->useraddress,
           'created_at'=>now(),
           'updated_at'=>now()
        ]);

        // return view('readPage' );
        // var_dump($user);
        // return $user 

        return redirect()->route('readPage');
    }

     public function readUser()
     {
      $users = DB::table('users')->get();
      return view('User.read' , ['data' => $users]);
     }

     public function updateUser(string $id)
     {
      //  $data = DB::table('users')->where('id' , $id)->get();
      // return $data;

      $data = DB::table('users')->find($id);
       return view('User.update' , ['value' => $data] );
     }


     public function updataData(string $id ,Request $req)
     {
     $update = DB::table('users')->where('id',$id)->update([

           'Name'=>$req->username,
           'Email'=>$req->useremail,
           'Contact'=>$req->usercontact,         
           'Address'=>$req->useraddress,
           'created_at'=>now(),
           'updated_at'=>now()
     ]);

     return redirect()->route('readPage');
     }

     public function deleteData(string $id)
     {
    $delete = DB::table('users')->where('id',$id)->delete();
    return redirect()->route('readPage'); 
     }
}
