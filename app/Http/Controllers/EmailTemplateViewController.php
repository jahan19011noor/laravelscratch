<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Http\Requests;

class EmailTemplateViewController extends Controller
{
    public function emailflyer()
    {
    	return view('mailtext');
    }
    
    public function sendemail()
    {
    //     Mail::send('mailtext', ['name' => 'Noor Jahan'], function($message)
    // 	{
    // 		$message-to('jahannoor19011@gmail.com')->from("othermail@some.com")->subject('Welcome');
    // 	});
    
        $users = ['rayhan.edu.bd@gmail.com', 'rpnpi00@gmail.com', 'rayhan@webhawksit.com', 'kemot.it@gmail.com'];
        $datas = ['email'=>'rayhan.edu.bd@gmail.com', 'name'=>'rpnpi00@gmail.com'];
        
        // $email = Mail::queue('mailtext', ['user' => $datas], function ($message) use ($users) {
        //         $message->from('hierarchy@webhawksittesting.com', 'HawksHierarchy');
        //         $message->to($users)->subject('Welcome to HawksHierarchy');
        //     });
      // return $data;
    
        foreach($users as $user)
        {
            $email = Mail::send('mailtext', ['user' => $datas], function ($message) use ($user) {
                $message->from('hierarchy@webhawksittesting.com', 'HawksHierarchy');
                $message->to($user)->subject('Welcome to HawksHierarchy');
            });
        }
    }
}
