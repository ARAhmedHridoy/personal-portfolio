<?php

namespace App\Http\Controllers\Backend;

use Session;
use App\Models\User;
use App\Mail\ForgotPasswordMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login(Request $request){

        // $password = "12345678";
        // $dd = Hash::make($password);
        // dd($dd);
        return view('backend.auth.login');
    }

    public function login_admin(Request $request){

        if(Auth::attempt(['email' => $request->email, 'password'=> $request->password], true)){
            if(!empty(Auth::User()->status)){
                if(Auth::User()->is_role == '1'){
                    return redirect()->intended('admin/dashboard')->with('success', 'Login Successfully');
                }else{
                    return redirect('login')->with('error', 'You are not a Admin');
                }
            }else{
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::find($user_id);
                return redirect('login')->with('error', 'This email is not verify yet!');
            }
        }else{
            return redirect()->back()->with('error', 'This credentials do not match with our records');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url('login'))->with('success', 'Logout Successfully');
    }

    public function forgot(Request $request){
        return view('backend.auth.forgot');
    }
    public function forgot_password(Request $request){
        // dd($request->all());
        $random_password = rand(111111111,999999999);
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user)){
            $user->password = Hash::make($random_password);
            $user->save();

            $user->password_random = $random_password;

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect(url('login'))->with('success', 'Password reset Successfully and send to your Email');
        }else{
            return redirect()->back()->with('error', 'Email not matched');
        }

    }

}
