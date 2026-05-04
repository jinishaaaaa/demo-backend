<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function aboutus()
    {
        return view('aboutus');
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function products()
    {
        return view('products');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}