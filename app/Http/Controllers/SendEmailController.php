<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SendEmailControlle;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Send;
use App\Http\Controllers\Requset;
use Illuminate\Support\Facades\DB;



class SendEmailController extends Controller
{


    public function store(Request $request)
    {

        $post = new Send();
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->message = $request->input('message');
        $post->save();

        return redirect()->back();

    }

}
