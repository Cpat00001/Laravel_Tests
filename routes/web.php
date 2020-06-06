<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// Route::get('contact', function () {
//     return view('contact');
// });
// });
Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route::get('/blog-post/{id}/author/{writer}', function ($id, $author) {
//     return $id .  'created' . $author;
// });
Route::get('/blog-post/{id}/{welcome?}', function ($id, $welcome = 1) {
    $pages = [
        1 => [
            'title' => 'title one'
        ],
        2 => [
            'title' => 'title two'
        ]
    ];
    $welcomes = [1 => 'Hello  ', 2 => 'Welcome to '];

    return view('blog-post', ['data' => $pages[$id], 'powitanie' => $welcomes[$welcome]]);
});

// Route::get('/users', function () {
//     return "Hello users page";
// });
// Route::get('/contacts', function () {
//     return view('contacts');
// });
// Route::view('/contacts', 'contacts', ['imie' => 'Jane']);

// Route::get('/users/{id}/comments/{comment}', function ($id, $komentarz) {
//     return 'User__:' . $id . 'commented it as:' . $komentarz;
// });
// Route::get('users/{name?}', function ($name = null) {
//     return $name;
// })->where('name','[A-Za-z]+');
// Route::get('users/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-5]+');
// Route::get('/user/profile', function () {
//     return 'Hello profile';
// })->name('helloprofile');
//create a route
// Route::get('users/profile', function () {
//     return 'Witaj w Profiles';
// })->name('profile');
// //redirect from /redirect to users/profile
// Route::get('/redirect', function () {
//     return redirect()->route('profile');
// });
