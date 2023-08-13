<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function register(Request $request){
        return view('register.index');
    }
    
    public function registerUser(Request $request){
        $data = $request->all();
        User::create($data);
        return redirect()->to('login');
    }

    public function login(Request $request){

        $rules = array(
            'email' => 'required|email',
            'password' => 'required|min:8'
        );

        $userdata = $request->all();

        $validator = Validator::make($userdata, $rules);

        unset($userdata['_token']);

        if (Auth::attempt($userdata)) {
            $user = User::where('email', $request->get('email'))->first();
            if($user){
                Session::put('user.id', $user->_id);
                Session::put('user.admin', $user->admin);
            }
            return redirect()->to('/');
        } else {
            return redirect()->to('login');
        }
    }

    public function logout(){
        Auth::logout();
        Session::forget('user.id');
        Session::forget('user.admin');
        return redirect()->to('login');
    }

}
