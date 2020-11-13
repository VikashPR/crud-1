<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        if(auth()->user() === null)
        {
            // return 'if is running';
            $mesg = 'Please login';
            
            return redirect('/login');
        }
        
        else
        {
            
            $user_id = auth()->user()->id;
            // print $user_id;
            $user = User::find($user_id);
            $title="welcome to Webilicious";
            return view('pages.index')->with('message',$title)->with('posts',$user->posts);
        }
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
