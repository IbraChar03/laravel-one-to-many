<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Post;

class MainController extends Controller
{
    public function home()
    {
        $persons = Person::all();
        return view("pages.home", compact("persons"));
    }
    public function posts()
    {
        $posts = Post::all();
        return view("pages.posts", compact("posts"));
    }
}