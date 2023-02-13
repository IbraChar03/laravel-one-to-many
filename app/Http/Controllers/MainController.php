<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class MainController extends Controller
{
    public function home()
    {
        $persons = Person::all();
        return view("pages.home", compact("persons"));
    }
}