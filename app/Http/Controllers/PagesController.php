<?php

namespace cnepal\Http\Controllers;

use Illuminate\Http\Request;

use cnepal\Http\Requests;
use cnepal\Http\Controllers\Controller;
use cnepal\Article;



class PagesController extends Controller
{


    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }


    


}