<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    		return view('allviews.welcome');
    }

    public function departments()
    {
    		return view('allviews.departments');
    }

    public function research()
    {
    		return view('allviews.research');
    }
    public function academic()
    {
            return view('allviews.academic');
    }

    public function about()
    {
    		return view('allviews.about');
    }

    public function civil()
    {
    		return view('allviews.civil');
    }

    public function mech()
    {
    		return view('allviews.mech');
    }
    public function mecha()
    {
            return view('allviews.mecha');
    }
    public function ec()
    {
            return view('allviews.ec');
    }
    public function ep()
    {
            return view('allviews.ep');
    }
    public function ceit()
    {
            return view('allviews.ceit');
    }
    public function che()
    {
            return view('allviews.che');
    }
    public function archi()
    {
            return view('allviews.archi');
    }
     public function ir()
    {
            return view('allviews.ir');
    }
     public function maths()
    {
            return view('allviews.maths');
    }
     public function eng()
    {
            return view('allviews.eng');
    }
     public function myan()
    {
            return view('allviews.myan');
    }
}

