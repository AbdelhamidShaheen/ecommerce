<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    //

    public function Index()
    {
        // return view("Home");
        return ["done"=>"yes"];
    }

}
