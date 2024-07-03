<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->lang){
            Session::put('lang',$request->lang);
            return redirect()->route('landing');
        }
        if (Session::get('lang') == 'ar'){
            return view('arabic');
        }
        return view('english');
    }
}
