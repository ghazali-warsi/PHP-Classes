<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/about' , function(){
//     return view('about');
// });

// Route::get('url' , return function with view )

// Route::view('url' , 'view name');
// Route::view('/about' , 'about');

// Route With parameters
// Route::get('/about/{route parameter}' , function ()
// Route::get('/about/{id?}/page/{name?}' , function (string $id = null , string $name = null)
// {
//     if($id && $name)
//     {

//         return "<h1>User ID is : $id</h1>" ."<h1>User Name is : $name</h1>";
//     }
//     else{
//   return "Page Without parameter";
//     }
// });


// name route 

// route::get('/aboutpage' , function(){
//     return view('about');
// })->name('about');


// route::get('/contact[age' , function(){
//     return view('contact');
// })->name('contact');

// route::get('/servicepage' , function(){
//     return view('services');
// })->name('service');


// Avoid 404 Page Not Found Error 

route::fallback(function()
{
    return view('error');
});

// group route 

// route::prefix('food')->group(function()
// {
//     route::get('/aboutpage' , function(){
//             return view('about');
//         })->name('about');
        
        
//         route::get('/contact[age' , function(){
//             return view('contact');
//         })->name('contact');
        
//         route::get('/servicepage' , function(){
//             return view('services');
//         })->name('service');
// });
// route::get('food/aboutpage' , function(){
//     return view('about');
// })->name('about');


// route::get('food/contact[age' , function(){
//     return view('contact');
// })->name('contact');

// route::get('food/servicepage' , function(){
//     return view('services');
// })->name('service');
Route::get('/home' , function()
{
    return view('webpage.home');
});

Route::get('/about' , function()
{
    return view('webpage.about');
});
Route::get('/contact' , function()
{
    return view('webpage.contact');
});

route::get('/master' , function()
{
    return view('layout.master');
});

route::get('/master/home' , function()
{
    return view('layout.home');
});

route::get('/master/about' , function()
{
    return view('layout.about');
});

route::get('/master/contact' , function()
{
    return view('layout.contact');
});

route::get('/theme/main' , function()
{
    return view('theme.main');
});

route::get('/theme/home' , function()
{
    return view('theme.home');
});
route::get('/theme/about' , function()
{
    return view('theme.about');
});
route::get('/theme/contact' , function()
{
    return view('theme.contact');
});

route::get('/theme/feedback' , function()
{
    return view('theme.feedback');
});


route::get('/user' , [UserController::class , 'showUser'])->name('user');
route::get('/userdetail' , [UserController::class , 'UserDetail'])->name('detail');