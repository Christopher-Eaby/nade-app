<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function __construct(){
        $is_admin = true;
        if(Auth::check()){
            if(Auth::user()->admin == 1){
                $is_admin = true;
            }
        }
        if(!$is_admin){
            return Redirect::to('login')->send();
        }
    }

    public function index(){
        return view('admin.index');
    }

    public function imageUploadPost(Request $request)
    {

        $imageName = time() . '.' . $request->file('file')->extension();  
     
        $request->file('file')->move(public_path('images'), $imageName);
    
        return response()->json(['success' => true, 'image' => '/images/' . $imageName]); 
    }
}
