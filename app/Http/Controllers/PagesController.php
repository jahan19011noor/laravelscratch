<?php

/*			Contents for Tutorial 5 			*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //	The homepage controller
    public function home()
    {
    	return view('welcome');
    }
    //	The homepage controller ends

    public function about()
    {
    	$people = ['this', 'is', 'a', 'people', 'array'];

    	return view('about', compact('people'));
    }
}

/*			Contents for Tutorial 5 ends				*/
