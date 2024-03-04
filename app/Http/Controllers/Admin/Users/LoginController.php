<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('admin.users.login', ['title' => 'Đăng nhập trang quản trị | TUHOC']);
    }

    public function manage(Request $request){
        $this->validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email'=>$request->input('email'),
        'password' => $request->input('password'), 'role'=>'1'],
        $request->input('remember'))){

            return redirect()-> route('admin');
        }
        // if(Auth::attempt(['email'=>$request->input('email'),
        // 'password' => $request->input('password'), 'role'=>'0', 'status'=>'1'],
        // $request->input('remember'))){

        //     // return redirect()-> route('home');
        //     return redirect()-> route('home');
        // }


        Session()->flash('error', 'Email hoặc mật khẩu không chính xác');
        return redirect()->back();

    }
}
