<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog_post($id, $welcome = 1)
    {
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
    }
}
