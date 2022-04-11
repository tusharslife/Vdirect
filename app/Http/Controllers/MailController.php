<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function paid_email() {
      $data = array('name'=> Auth::user()->name);
      Mail::send(['text'=>'mail.paid'], $data, function($message) {
         $message->to(Auth::user()->email, Auth::user()->name)->subject
            ('Payment Notification Vdirect');
         $message->from('admin@vdirect.com','Vdirect Private Limited, India');
      });
   }
}