<?php
namespace App\Http\Services\post;

use App\Models\posts;
use Illuminate\Contracts\Session\Session;

class postservice{

    public function get($id = 1){
        return posts::where('id', 1)->get();
    }

    public function getAll(){
        return posts::orderbyDesc('id')->paginate(20); #Xep theo id, phan trang 20
    }
    public function create($request){
        try{
            posts::create([
            'user_name'=> (string) $request->input('user_name'),
            'user_id'=> (int) $request->input('user_id'),
            'content'=> (string) $request->input('content'),
            'subject'=> (string) $request->input('subject'),
            'status'=> '1',

           ]);
           $request->session()->flash('success', 'Thành công!!');
        }catch(\Exception $err){
            $request->session()->flash('error', $err->getMessage());
            return false;
        }

        return true;
    }
}
