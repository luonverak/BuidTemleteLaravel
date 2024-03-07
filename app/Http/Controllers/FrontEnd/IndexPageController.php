<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    public function indexPage()
    {
        return view('frontend.index');
    }
    public function contactPage()
    {
        return view('frontend.contact');
    }
}
