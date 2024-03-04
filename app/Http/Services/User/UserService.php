<?php
namespace App\Http\Services\User;

use App\Models\User;
use App\Models\Users;
use Illuminate\Contracts\Session\Session;

class UserService{
    public function create($request){
        try{
           User::create([
            'name'=> (string) $request->input('name'),
            'email'=> (string) $request->input('email'),
            'password'=> (string) ($request->input('password')),
            'role'=> (int) $request->input('role'),
            'status'=> (int) $request->input('active'),

           ]);
           $request->session()->flash('success', 'Thành công!!');
        }catch(\Exception $err){
            $request->session()->flash('error', $err->getMessage());
            return false;
        }

        return true;
    }
}
