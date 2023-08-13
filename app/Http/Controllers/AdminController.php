<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\BaseAdminController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Models\User;

class AdminController extends BaseAdminController
{
    public function __construct(){
        parent::__construct();
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
