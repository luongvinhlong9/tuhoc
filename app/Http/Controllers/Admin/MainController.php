<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    public function index(){
        return view('admin.home', ['title'=>'Trang quản trị admin']);
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
