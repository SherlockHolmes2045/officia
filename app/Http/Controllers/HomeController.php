<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all()->take(10);
        $notifications = null;
        if(auth()->check()){
            $notifications = auth()->user()->notifications;
        }

        return view('pages.welcome-content',compact('categories','notifications'));
    }
}
