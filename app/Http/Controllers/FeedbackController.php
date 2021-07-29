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
    public function test()
    {
        return view('feedback/test');
    }
}
