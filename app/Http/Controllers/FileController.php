<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Exception;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    
    public function uploadImage(Request $request)
    {
        
        
        try
        {
            //dd($request);
            $request->validate([
            'image' => 'required|mimes:jpg,png,svg,jpeg|max:5048',
            ]);
            
            $path = $request->file('image')->store('images','s3');
            Image::create([
            'user_id' => $request->user()->id,
            'description' => $request->input('description'),
            'image_url' => $path
        ]);
        }
        catch (Exception $e)
        {
            dd($e->getMessage());
        }
        return redirect('upload/image');
    }
    public function upload(Request $request)
    {
        
        return view('file/index');
    }
    
}
