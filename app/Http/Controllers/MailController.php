<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request)
    {
        $all = $request->all();

        Mail::queue('admin.mailtemplate',compact('all'),function($message)use($all){
            $message->from($all['senderEmail'])
                    ->to($all['receptionistEmail'])
                    ->subject($all['subject']);
        });
    }
    

}
