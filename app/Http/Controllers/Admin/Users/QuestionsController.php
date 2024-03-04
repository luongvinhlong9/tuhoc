<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    //
    public function index(){
        $data['list'] = DB::table('questions')->get()->toArray();
        return view('admin.questions.main', [
            'title'=>'Kiểm tra'], $data);

    }

    public function detail(Request $request){
        $data = DB::table('questions')->where('id', $request->id)->get()->toArray();

        return view('admin.questions.detail', ['title'=>'Kiểm tra - TUHOC'], compact('data'));

    }

    public function edit(Request $request){

        $result['result'] = DB::table('questions')->where('id', $request->id)->get()->toArray();

        return view('admin.questions.edit',[
            'title'=> 'Chỉnh sửa đề'], $result);
    }

    public function update(Request $request){
        DB::table('questions')->where('id', $request->id)->update([
            'title'=>$request->name,
            'q1'=>$request->q1,
            'a1'=>$request->a1,
            'q2'=>$request->q2,
            'a2'=>$request->a2,
            'q3'=>$request->q3,
            'a3'=>$request->a3,
            'q4'=>$request->q4,
            'a4'=>$request->a4,
            'q5'=>$request->q5,
            'a5'=>$request->a5,
            'q6'=>$request->q6,
            'a6'=>$request->a6,
            'q7'=>$request->q7,
            'a7'=>$request->a7,
            'q8'=>$request->q8,
            'a8'=>$request->a8,
            'q9'=>$request->q9,
            'a9'=>$request->a9,
            'q10'=>$request->q10,
            'a10'=>$request->a10,

        ]);
        return redirect('/admin/questions/main');
    }
}
