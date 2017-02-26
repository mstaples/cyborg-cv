<?php

namespace App\Http\Controllers;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
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

    public function printable()
    {
        $filename = 'cv.pdf';
        $path = storage_path($filename);

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }

    public function contact()
    {
        $gif = 'gif'.rand(1,12).'.gif';

        return view('contact')->with([ 'gif' => $gif ]);
    }
}
