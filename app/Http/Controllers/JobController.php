<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Job;
use App\Company;
use App\Http\Requests\JobPostRequest;
use Auth;


class JobController extends Controller


{
    public function __construct(){
        $this->middleware(['employer','auth'], ['except' => ['index', 'show', 'apply', 'alljobs', 'search']]);
    }

    public function index(){
        // $jobs = Job::latest()->limit(10)->where('status', 1)->get();
        // $companies = Company::get()->random(10);
        // return view('website', compact('jobs', 'companies'));
    }

    public function show($id, Video $job){
        // the same as:
        // $job = Job::find($id);
        return view('jobs.show', compact('job'));
        /* dd($job); */
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
                     'title' => 'required',
                     'video' => 'required|mimes:mp4,mkv',
                     'thumbnail' => 'required|mimes:png,jpeg,jpg'
        ]);
        
        
        
        $user_id = auth()->user()->id;

        $company = Company::where('user_id', $user_id)->first();

        $company_id = $company->id;





        // thumbnail
        $filethub=$request->file('thumbnail');
        $filethub->move('uploads/thumbnail/',$filethub->getClientOriginalName());
        $filethub_name=$filethub->getClientOriginalName();

        $insert1=new Video();
        $insert1->thumbnail = $filethub_name;
        //$insert1->save();
   

        // video
        $file=$request->file('video');
        $file->move('uploads/video/',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();

        $insert=new Video();
        $insert->video = $file_name;
        //$insert->save();

        Video::create([
            'user_id' => $user_id,
            'company_id' => $company_id,
            'thumbnail' => $filethub_name,
            'video' => $file_name,
            'title' => request('title'),
            'slug' => str_slug(request('title')),
            'description' => request('description'),
            'catagory' => request('catagory'),
            'type' => request('type'),
            'status' => request('status'),
            'release_date' => request('release_date'),

        ]);


        return redirect()->back()->with('message', 'Video Uploaded!');
    }

    public function edit($id){
        $job = Video::findOrFail($id);
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, $id){
        $job = Video::findOrFail($id);
        $job->update($request->all());
        return redirect()->back()->with('message', 'Video Entry Updated');
    }

    public function myjob(){
        $jobs = Job::where('user_id', auth()->user()->id)->get();
        return view('jobs.myjob', compact('jobs'));
    }

    public function apply(Request $request, $id){
        $jobId = Job::find($id);
        $jobId->users()->attach(Auth::user()->id);
        return redirect()->back()->with('message', 'Application Sent');
    }

    public function applicant(){
        $applicants = Job::has('users')
            ->where('user_id', auth()->user()->id)->get();
        return view('jobs.applicants', compact('applicants'));
    }

    public function alljobs(Request $request){
        $keyword = $request->get('title');

        $type = $request->get('type');

        $category = $request->get('category_id');

        $address = $request->get('address');

        if($keyword || $type || $category || $address){
            $jobs = Job::where('title', 'LIKE', '%'.$keyword.'%')
                ->orWhere('type', $type)
                ->orWhere('category_id', $category)
                ->orWhere('address', $address)
                ->paginate(10);
            return view('jobs.alljobs', compact('jobs'));
        } else {
            $jobs = Job::latest()->paginate(10);

            return view('jobs.alljobs', compact('jobs'));
        }
    }

}
