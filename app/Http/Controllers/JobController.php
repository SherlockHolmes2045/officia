<?php

namespace App\Http\Controllers;

use App\Applications;
use App\Category;
use App\EmployerDetails;
use App\Favorite;
use App\Job;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    public function showform(){

        $notifications = auth()->user()->notifications;
        $tags = Tag::all();
        $categories = Category::all();
        return view('pages.post-job',compact('notifications','tags','categories'));

    }

    public function savejob(Request $request){

        $request->validate([
            'title' => ['required','string','max:255'],
            'location' => ['nullable','string','max:255'],
            'type' => ['required','string',Rule::in(['Part Time', 'Full Time','Freelance'])],
            'experience' => ['required','string',Rule::in(["any","Less than 1 year","2 year","3 year","4 year","Over 5 year"])],
            "salary" => ["nullable","numeric"],
            "gender" => ["required","string",Rule::in(["Any","Male","Female"])],
            "link" => ["nullable","string","url"],
            "deadline"=>["nullable","date"],
            "duration" => ["nullable","numeric"],
            "extra" => ["nullable","mimes:docx,doc,pdf"],
            "description" =>["required","string"],
            "categories" => ["required","string"],
            "skills" => ["required","string"]
        ]);

        $job = new Job();
        $job->title = $request->get('title');
        $job->location = $request->get('location');
        $job->type = $request->get('type');
        $job->experience = $request->get('experience');
        $job->renumeration = $request->get("salary");
        $job->gender = $request->get("gender");
        $job->deadline = $request->get("deadline");
        $job->duration = $request->get("duration");
        $job->description = $request->get("description");
        $job->categories = $request->get("categories");
        $job->skills = $request->get("skills");

        $employerdetails = EmployerDetails::where('user_id',auth()->user()->id)->first();
        $job->user_id = $employerdetails->id;
        if($request->file('extra')){
            $path = $request->file('extra')->store('extras');
            $job->cahier_charge = $path;
        }
        $job->save();

        notify()->success('Job created successfully');
        return redirect()->route('job.details',$job->id);
    }

    public function getjob($id){

        if(auth()->check()){
            $notifications = auth()->user()->notifications;
        }

        $job = Job::findorfail($id);

        $categories = explode(",",$job->categories);
        $skills = explode(",",$job->skills);
        $job->categories = $categories;
        $job->skills = $skills;

        $linkedin = $job->getShareUrl("Check out this job on".env("APP_NAME"),"linkedin");
        $twitter = $job->getShareUrl("Check out this job on".env("APP_NAME"),"twitter");
        $facebook = $job->getShareUrl("Check out this job on".env("APP_NAME"),"facebook");
        $whatsapp = $job->getShareUrl("Check out this job on".env("APP_NAME"),"whatsapp");

        if(auth()->check() && auth()->user()->account_type=="candidate"){
            $application = Applications::where([
               "user_id" => auth()->user()->id,
                "job_id" => $id
            ])->get();
        }
        return view('pages.job-detail',compact('notifications','job','linkedin','twitter','facebook','whatsapp','application'));
    }

    public function apply($id){

        $application = new Applications();
        $application->job_id = $id;
        $application->user_id = auth()->user()->id;
        $application->save();
        notify()->success('Successfully Apply to this job.');
        return redirect()->back();
    }

    public function unapply($id){

        $application = Applications::where([
            "user_id" => auth()->user()->id,
            "job_id" => $id
        ])->first();
        $application->delete();
        notify()->success('Application deleted successfully.');
        return redirect()->back();
    }

    public function favjob(Request $request,$id){

        if($request->ajax()){

            $favorite = Favorite::where([
                'user_id' => auth()->user()->id,
                'job_id' => $id
                ])->first();

            if($favorite != null){

                $favorite->delete();

                return response()->json(['message' => 'The job was successfully unsaved']);
            }else{
                $fav = new Favorite();
                $fav->user_id = auth()->user()->id;
                $fav->job_id = $id;

                $fav->save();
                return response()->json(['message' => 'The job was successfully saved']);
            }
        }

    }



}
