<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| PagesController
|--------------------------------------------------------------------------
|
| This Controller is used for static web pages
|
*/

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['name' => 'Cahyadi Bayu Saputro']);
    }
}
