<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function showform(){

        $notifications = auth()->user()->notifications;
        $tags = Tag::all();
        $categories = Category::all();
        return view('pages.post-job',compact('notifications','tags','categories'));

    }

    public function savejob(Request $request){

        dd($request);
    }


}
