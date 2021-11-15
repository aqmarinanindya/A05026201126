<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showForm()
    {
        //code utk ngeload data yg akan dimuat di form//
        return view('showgreetings');
    }
    function resultGreetings()
    {
        return view('tugas');
        //code utk ngeload data yg akan dimuat di form//
    }
    function formDataBarang()
    {
        return view('etspweb');
    }
    function palindromecheckerPhp()
    {
        return view ('palindromephp');
    }
}
