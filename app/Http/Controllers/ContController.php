<?php

namespace App\Http\Controllers;

use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Response;
use Purifier;
use Hash;
use Auth;
use JWTAuth;

use App\User;

class ContController extends Controller
{
    public function show() 
	{
		return view('contact');
	}

	public function mailToAdmin(ContactFormRequest $message, Admin $admin)
	{        //send the admin an notification
		$admin->notify(new InboxMessage($message));
		// redirect the user back
		return redirect()->back()->with('message', 'thanks for the message! We will get back to you soon!');
	}
}