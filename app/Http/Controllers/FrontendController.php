<?php

namespace App\Http\Controllers;

use App\Models\Ankita;
use App\Models\Contact;
use App\Models\Register;
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
    public function ankita()
    {
        return view('ankita');
    }
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|min:7',
            'email' => 'required|email',
            'subject' => 'required|min:10|max:20',
            'message' => 'nullable|min:20|max:200',
        ]);
      Contact::create($request->all());
      return view('success');
    }
    public function submitForm(Request $request)
    {
       Ankita::create($request->all());
      return view('success'); 
    }
    public function register()
    {
        return view('register');
    }
    public function submitForm2(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:5',
            'phone' => 'required|digits:10',
            'email' => 'required|email',
            'college' => 'required|min:5',
            'course' => 'required|min:5',
            'semester' => 'required',
        ]);
       Register::create($request->all());
      return view('success'); 
    }
}