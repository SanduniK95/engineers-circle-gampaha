<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
{
   // Newsletter::delete('$request->user_email');
    if ( ! Newsletter::isSubscribed($request->user_email) ) {
        Newsletter::subscribe($request->user_email);
       return redirect('admin/newsletter')->with('status','Thanks for Subscription');
    }
   return redirect('admin/newsletter')->with('status','You are already subscribed');
}

}
