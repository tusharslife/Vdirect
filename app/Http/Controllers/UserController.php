<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware(['seeker']);
    }

    public function index(){
        return view('profile.edit');
    }

    public function store(Request $request){
        $this->validate($request, [
            'address' => 'required',
            'phone_number' => 'required|numeric',
            'email' => 'required|min:20'
        ]);

        $user_id = auth()->user()->id;

        Profile::where('user_id', $user_id)->update([
            'address' => request('address'),
            'primary_phone_number' => request('primary_phone_number'),
            'secondary_phone_number' => request('secondary_phone_number'),
            'secondary_email' => request('secondary_email')
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
                ->with('avatar_message', 'Avatar Updated')
                ->with('class', 'alert alert-success');

        } else {
            return redirect()->back()
                ->with('avatar_message', 'Choose a file')
                ->with('class', 'alert alert-danger');
        }
    }


}
