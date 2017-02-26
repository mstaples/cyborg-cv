<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class CvController extends BaseController
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
     * @return \Illuminate\Http\Response
     */
    public function coverLetter()
    {
        return view('coverLetter');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function skills()
    {
        return view('skills');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function work()
    {
        return view('work');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function hire()
    {
        return view('hire');
    }
}
