<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Services\User\UserService;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Userscontroller extends Controller
{
    protected $userService;
    //
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function index(){
        $data['list'] = DB::table('users')->get()->toArray();
        return view('admin.users.main', [
            'title'=>'Người dùng'], $data);
    }

    public function edit(Request $request){

        $result['info'] = DB::table('users')->where('id', $request->id)->get()->toArray();

        return view('admin.users.edit',[
            'title'=> 'Chỉnh sửa thông tin người dùng'], $result);
    }

    public function update(Request $request){
        DB::table('users')->where('id', $request->id)->update([
            'name'=>$request->name,
            'password'=>bcrypt($request->password),
            'status'=>$request->status

        ]);
        return redirect('/admin/users/main');
    }

    public function editStatus(Request $request){
        $status=DB::table('users')->get('status')->where('id', $request->id)->toArray();
        foreach($status as $value)
        echo $value;
        // DB::table('users')->where('id', $request->id)->update([
        //     'name'=>$request->name,
        //     'password'=>bcrypt($request->password),
        //     'status'=>$request->status

        // ]);
        return redirect('/admin/users/main');
    }
}
