<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Generate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function jsGeneration()
    {
        return view('generate_js');
    }

    public function storeDomain(Request $request)
    {
        $this->validate($request,[
            
            'domain' => 'required'
        ]);
        $domain_store = new Generate;
        $domain_store->domain = $request->domain;
        $domain_store->blocker_id = rand(1000000, 9999999);
        $domain_store->status = true;
        $domain_store->save();
    }
}