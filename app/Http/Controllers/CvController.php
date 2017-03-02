<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $history = $this->getWorkHistory();
        return view('work')->with('history', $history);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function hire()
    {
        return view('hire');
    }

    public function getWorkHistory()
    {
        $files = [];
        $directoryString = base_path('resources/views/partials/jobs');
        foreach(glob($directoryString.'/*.blade.php') as $file) {
            $files[] = str_replace('.blade.php', '', str_replace($directoryString.'/', '', $file));
        }
        rsort($files);

        return $files;
    }
}
