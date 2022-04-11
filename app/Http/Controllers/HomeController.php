<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Video;
use App\User;
use App\Company;
use App\Ipayment;
use Carbon\Carbon;
use App\Http\Requests\JobPostRequest;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if(Auth::user()->user_type == 'employer'){
            $videos = Video::where('user_id', auth()->user()->id)->paginate(10);;
        return view('companyhome', compact('videos'));


        }
        else if (Auth::user()->user_type == 'admin'){
  
            $admins_count = User::get()->where('user_type', 'admin');
            $company_count = User::get()->where('user_type', 'employer');
            $customer_count = User::get()->where('user_type', 'seeker');
            $subscribed_count = Ipayment::get()->where('status', '1');
            $total_customers = count($customer_count);
            $total_company = count($company_count);
            $total_subscribed = count($subscribed_count);
            $total_admins = count($admins_count);
            $videos = Video::latest()->paginate(10);

            
        return view('adminhome', compact('videos', 'total_customers', 'total_company', 'total_subscribed','total_admins'));


        }
        else {
            // $jobs = Job::latest()->limit(10)->where('status', 1)->get();
            // $companies = Company::get();
            // $companiescount = count($companies);
            // if ($companiescount == 0)
            // {
                
            // }
            // else
            // {
            //    $companies = Company::get()->random();
            // }

            // return view('userhome', compact('jobs'));
            // Recentjob backup

            $keyword = $request->get('title');
            $type = $request->get('type');
            $release_date = $request->get('release_date');
            $thumbnail = $request->get('thumbnail');

            $todaysdate = Carbon::now()->addDay(0);
            $o_user_id = auth()->user()->id;
            $memus = Ipayment::get();
           
            foreach ($memus as $memu) {
                if ($memu['user_id'] == $o_user_id)
                {

                    if ($todaysdate <= $memu['valid'] )
                    {
                        $videos = Video::latest()->where('status', 1)->paginate(10);
                
                        return view('userhome', compact('videos'));
                        
                    
                    }
                    else
                    {
                        // if($keyword || $type || $release_date || $thumbnail){
                        //     $videos = Video::where('status', 1)
                        //         ->where('status', 1)
                        //         ->orWhere('type', $type)
                        //         ->orWhere('release_date', $release_date)
                        //         ->orWhere('thumbnail', $thumbnail)
                        //         ->paginate(10);
                        //     return view('userhome', compact('videos'));
                        // } else {

                            $o_user_id = auth()->user()->id;
                                              
                                    Ipayment::where('user_id', $o_user_id)->update([
                                        'status' => "0",
                                    ]); 
                        
                        return view('user.subscription');
                        
                    }
                }
            }
            
         
              
        }


        
    }
}
