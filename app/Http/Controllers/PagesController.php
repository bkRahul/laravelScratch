<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {     
        $tasks = ['Wake Up', 'Get Lunch', 'Leave for Work', 'Work', 'Come Home', ];

        return view('home', ['tasks' => $tasks, 'name'=> 'Laracasts']);
    }

    public function about()
    {
        return view('about');
    }
}
