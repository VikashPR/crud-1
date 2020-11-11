<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title="welcome to Webilicious";
        return view('pages.index')->with('message',$title);
    }
    public function about()
    {
        return view('pages.about');
    }
    public function service()
    {
        $data = array( 
            'title' => 'SERVICES',
            'services' => ['Web Devolepment','BackEnd Devolepment']
        );
        return view('pages.services')->with($data);
    }
}
