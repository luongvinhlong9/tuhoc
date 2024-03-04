<?php
namespace App\Http\Services\Document;

use App\Models\Document;
use App\Models\Documents;
use Illuminate\Contracts\Session\Session;

class DocumentService{
    public function create($request){
        try{
           Documents::create([
            'name'=> (string) $request->input('name'),
            'content'=> (string) $request->input('content'),
            'subject'=> (string) $request->input('subject'),
            'class'=> (string) $request->input('class'),
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
