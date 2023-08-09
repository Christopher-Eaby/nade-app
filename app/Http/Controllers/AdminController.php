<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AdminController extends Controller
{
    public function index(){
        if(Auth::check()){
            if(Auth::user()->admin == 1){
                return view('admin.index');
            } else {
                return redirect()->to('login');
            }
        }
    }
}
