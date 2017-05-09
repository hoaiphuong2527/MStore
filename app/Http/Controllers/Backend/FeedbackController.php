<?php

namespace App\Http\Controllers\Backend;

use App\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    
    public function index()
    {
        $feedback = new Feedback();
		$feedbacks = $feedback->getFeedbacks();

		return view('backend.feedback', ['feedbacks' => $feedbacks]);
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
