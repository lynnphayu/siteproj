<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    		return view('allviews.welcome');
    }

    public function depertments()
    {
    		return view('allviews.depertments');
    }

    public function research()
    {
    		return view('allviews.research');
    }

    public function about()
    {
    		return view('allviews.about');
    }

    public function civil()
    {
    		return view('allviews.civil');
    }

    public function mechnical()
    {
    		// return view('allviews.mechnical');
    }
}
