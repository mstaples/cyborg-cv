<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gif = 'gif'.rand(1,12).'.gif';

        return view('index')->with([ 'gif' => $gif ]);
    }

    /**
     * Show the rant.
     *
     * @return \Illuminate\Http\Response
     */
    public function rant()
    {
        return view('rant');
    }
}
