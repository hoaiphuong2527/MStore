<?php

namespace App\Http\Controllers\Frontend;

use App\Feedback;
use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'name'       => 'required|max:100',
                'email'      => 'required|max:255|email',
                'subject'    => 'required|max:100',
                'message'    => 'required|max:255'
            ],
            []);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            //Save to database
            $feedback = new Feedback();
            $feedback->Name = $request->get('name');
            $feedback->Email = $request->get('email');
            $feedback->Subject = $request->get('subject');
            $feedback->Message = $request->get('message');
            $feedback->Status = 0;
            $feedback->save();

            //Send mail
            Mail::to($feedback->Email, $feedback->Name)
                    ->send(new FeedbackMail($feedback->Name, $feedback->Message));
            
            return redirect('/');
        }
    }
}
