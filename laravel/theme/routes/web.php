<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/userform' , 'User.create')->name('insertPage');
Route::controller(UserController::class)->group(function()
{
    Route::get('/userhome' ,  'readUser')->name('readPage');
    Route::post('useradd', 'insertUser')->name('userInsert');
    Route::get('/userupd/{id}' ,'updateUser')->name('userUpdate');
    Route::post('/dataupd/{id}' , 'updataData')->name('updataData');
    Route::get('/delete/{id}' , 'deleteData')->name('deleteData');
});
