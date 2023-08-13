<?php

namespace App\Http\Controllers;

// Facades
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

// Models
use App\Models\User;

class BaseAdminController extends Controller
{
    public function __construct(){
        $is_admin = false;

        if(Session::has('user.id')){
            $user = User::find(Session::get('user.id'));
            if($user->admin){
                $is_admin = true;
            }
        } 
        if(!$is_admin){
            return Redirect::to('login')->send();
        }
    }
}
