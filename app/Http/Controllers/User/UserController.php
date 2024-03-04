<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\posts;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    //
    public function index(){
        return view('user.login', ['title' => 'Trang đăng nhập | TUHOC']);
    }

    public function manage(Request $request){
        $this->validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email'=>$request->input('email'),
        'password' => $request->input('password'), 'role'=>'0', 'status'=>'1'],
        $request->input('remember'))){

            // return redirect()-> route('home');
            return redirect()-> route('user');
        }
        if(Auth::attempt(['email'=>$request->input('email'),
        'password' => $request->input('password'), 'role'=>'1', 'status'=>'1'],
        $request->input('remember'))){

            // return redirect()-> route('home');
            return redirect()-> route('admin');
        }


        Session()->flash('error', 'Email hoặc mật khẩu không chính xác');
        return redirect()->back();

    }

    public function edit(Request $request){

        $result['info'] = DB::table('users')->where('id', $request->id)->get()->toArray();

        return view('user.userInfo',[
            'title'=> 'Trang thông tin cá nhân'], $result);
    }
    public function forum(){

        $data = posts::orderby('created_at','DESC')->paginate(15);
        if($key=request()->key){
            $data = posts::orderby('created_at','DESC')->paginate(15);

        }
        return view('forum', ['title'=>'Diễn đàn - TUHOC'], compact('data'));
    }
}
