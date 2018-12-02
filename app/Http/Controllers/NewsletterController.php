<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subscriber;
use Mail;
use App\Mail\EmailManager;

class NewsletterController extends Controller
{
    public function index(Request $request)
    {
    	$users = User::all();
        $subscribers = Subscriber::all();
    	return view('newsletters.index', compact('users', 'subscribers'));
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

        foreach ($request->subscriber_emails as $key => $email) {
            $array['view'] = 'emails.newsletter';
            $array['subject'] = $request->subject;
            $array['from'] = $request->mail_from;
            $array['content'] = $request->content;

            Mail::to($email)->queue(new EmailManager($array));
    	}

    	flash('Newsletter has been send')->success();
    	return redirect()->route('home');
    }
}
