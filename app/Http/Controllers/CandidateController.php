<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function dashboard(){

        $notifications = auth()->user()->notifications;

        return view('pages.candidate-dashboard',compact('notifications'));
    }
}
