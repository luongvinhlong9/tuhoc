<?php
namespace App\Http\Services\Subject;

use App\Models\Subject;
use Illuminate\Contracts\Session\Session;

class SubjectService{

    public function get($id = 1){
        return Subject::where('id', 1)->get();
    }

    public function getAll(){
        return Subject::orderbyDesc('id')->paginate(20); #Xep theo id, phan trang 20
    }
    public function create($request){
        try{
           Subject::create([
            'name'=> (string) $request->input('name'),
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
