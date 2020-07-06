<?php

namespace App\Http\Controllers;

use App\Applications;
use App\Favorite;
use App\User;
use App\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CandidateController extends Controller
{

    public function dashboard(){

        $notifications = auth()->user()->notifications;

        $details =  UserDetails::where('user_id',auth()->user()->id)->first();
        $percentage = round(100 - ($this->percentage($details)/17)*100,0);
        $fav = Favorite::where('user_id', auth()->user()->id)->get();
        $applications = Applications::where('user_id', auth()->user()->id)->get();
        return view('pages.candidate-dashboard',compact('notifications','details','percentage','applications','fav'));
    }

    public function percentage($details){
        $percentage = 0;
        if($details->picture == "images/accout/default.jpg")
        $percentage++;
        if($details->title==null)
            $percentage++;
        if($details->location == null)
            $percentage++;
        if($details->experience==null)
            $percentage++;
        if($details->gender==null)
            $percentage++;
        if($details->job_type==null)
            $percentage++;
        if($details->about==null)
            $percentage++;
        if($details->special_skills==null)
            $percentage++;
        if($details->cover_letter==null)
            $percentage++;
        if($details->cv==null)
            $percentage++;
        if($details->contact==null)
            $percentage++;
        if($details->facebook=="#")
            $percentage++;
        if($details->twitter=="#")
            $percentage++;
        if($details->github=="#")
            $percentage++;
        if($details->linkedin=="#")
            $percentage++;

        return $percentage;
    }

    public function bookmark(){

        $notifications = auth()->user()->notifications;

        $favs = DB::table('jobs_saved')
            ->join('jobs','jobs.id','=','jobs_saved.job_id')
            ->join('employer_details','employer_details.id','=','jobs.user_id')
            ->join('users','employer_details.user_id','=','users.id')
            ->where('jobs.user_id',auth()->user()->id)
            ->select('jobs.*','employer_details.picture','users.name')
            ->paginate(6);
        $details =  UserDetails::where('user_id',auth()->user()->id)->first();
        $percentage = round(100 - ($this->percentage($details)/17)*100,0);
        return view('pages.dashboard-bookmark',compact('notifications','favs','details','percentage'));

    }

    public function applications(){

        $notifications = auth()->user()->notifications;
        $details =  UserDetails::where('user_id',auth()->user()->id)->first();
        $percentage = round(100 - ($this->percentage($details)/17)*100,0);
        $applications = DB::table('jobs_candidature')
            ->join('jobs','jobs.id','=','jobs_candidature.job_id')
            ->join('employer_details','employer_details.id','=','jobs.user_id')
            ->join('users','employer_details.user_id','=','users.id')
            ->where('jobs_candidature.user_id',auth()->user()->id)
            ->select('jobs.*','employer_details.picture','users.name')
            ->paginate(6);
        return view('pages.dashboard-applications',compact('details','notifications','percentage','applications'));
    }

    public function editForm(){

        $notifications = auth()->user()->notifications;
        $details =  UserDetails::where('user_id',auth()->user()->id)->first();
        $percentage = round(100 - ($this->percentage($details)/17)*100,0);

        return view('pages.dashboard-profile',compact('details','notifications','percentage'));
    }

    public function editProfile(Request $request) {

        $request->validate([
            'name' => ['nullable','string'],
            'email' =>['nullable','email'],
            'contact'=>['nullable','numeric'],
            'location'=>['nullable','string'],
            'actualPassword'=> ['nullable',function ($attribute, $value, $fail){
                if (!Hash::check($value, auth()->user()->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
            'newPassword' => ['nullable','min:8'],
            'newPasswordConfirmation' => ['nullable','same:newPassword'],
            'picture' => ['nullable','image']
        ]);


        $user = User::find(auth()->user()->id);
        $user->name = $request->get('name') != null ? $request->get('name'):$user->name;
        $user->email = $request->get('email') != null ? $request->get('email'):$user->email;
        $user->password = $request->get('newPassword') != null ? $request->get('newPassword'):$user->password;
        if($request->file('picture')){
            $path = $request->file('picture')->store('/pictures','public');
            $user->picture = $path;
        }
        $user->save();

        $details = UserDetails::where('user_id',auth()->user()->id)->first();
        $details->location = $request->get('location') != null ? $request->get('location'):$details->location;
        $details->contact = $request->get('contact') != null ? $request->get('contact'):$details->contact;
        $details->save();
        notify()->success('Profile updated successfully');
        return redirect()->back();
    }

    public function resume(){
        $notifications = auth()->user()->notifications;
        $details =  UserDetails::where('user_id',auth()->user()->id)->first();
        $details->skills = unserialize($details->skills);
        $percentage = round(100 - ($this->percentage($details)/17)*100,0);

        return view('pages.candidate-resume',compact('notifications','details','percentage'));
    }
}

