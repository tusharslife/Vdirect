<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Ipayment;
use Carbon\Carbon;

class UserviewController extends Controller
{
    public function __construct(){
        $this->middleware(['seeker']);
    }

    public function index(){
        return view('profile.show');
    }

    public function subscribe(){
        $todaysdate = Carbon::now()->addDay(0);
        $o_user_id = auth()->user()->id;
        $memus = Ipayment::get();
       
        foreach ($memus as $memu) {
            if ($memu['user_id'] == $o_user_id)
            {

                if ($todaysdate <= $memu['valid'] )
                {
                    return view('user.valid');
                    
                
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
                    
                        return view('user.subscription');
                    
                }
            }
        }
        
    }

    public function paymentsuccess(Request $request){
        $o_user_id = auth()->user()->id;
        $date = Carbon::now()->addDay(60);

                Ipayment::where('user_id', $o_user_id)->update([
                    'valid' => $date,
                    'status' => "1",
                ]); 
       
               app('App\Http\Controllers\MailController')->paid_email();

        return view('user.payment_success');
    }

    public function payment(){
        
        return view('user.payment');
    }

    public function store(Request $request){
        $this->validate($request, [
            'address' => 'required',
            'phone_number' => 'required|numeric',
        ]);

        $user_id = auth()->user()->id;

        Profile::where('user_id', $user_id)->update([
            'address' => request('address'),
            'phone_number' => request('phone_number'),
        ]);

        return redirect()->back()->with('profile_message', 'Profile Updated');
    }


    public function avatar(Request $request){
        $this->validate($request, [
            'avatar' => 'required|mimes:png,jpeg,jpg'
        ]);
        $user_id = auth()->user()->id;

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');

            $ext = $file->getClientOriginalExtension();

            $filename = time().'.'.$ext;

            $file->move('uploads/avatar/', $filename);

            Profile::where('user_id', $user_id)->update([
                'avatar' => $filename
            ]);

            return redirect()->back()
                ->with('avatar_message', 'Avagar Updated')
                ->with('class', 'alert alert-success');

        } else {
            return redirect()->back()
                ->with('avatar_message', 'Choose a file')
                ->with('class', 'alert alert-danger');
        }
    }


}
