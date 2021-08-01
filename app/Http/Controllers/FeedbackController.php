<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        return view('feedback/index');
    }
    public function new(Request $request)
    {
        return view('feedback/new');
    }
    public function detail(Request $request,$feedback_id)
    {
        return view('feedback/detail',compact('feedback_id'));
    }
    public function edit(Request $request,$feedback_id)
    {
        return view('feedback/edit',compact('feedback_id'));
    }
}
