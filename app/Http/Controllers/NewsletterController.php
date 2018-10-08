<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Mail\EmailManager;

class NewsletterController extends Controller
{
    public function index(Request $request)
    {
    	$users = User::all();
    	return view('newsletters.index', compact('users'));
    }

    public function send(Request $request)
    {
    	foreach ($request->user_emails as $key => $email) {
            $array['view'] = 'emails.newsletter';
            $array['subject'] = $request->subject;
            $array['from'] = $request->mail_from;
            $array['content'] = $request->content;

            Mail::to($email)->queue(new EmailManager($array));
    	}

    	flash('Newsletter has benn send')->success();
    	return redirect()->route('home');
    }
}
