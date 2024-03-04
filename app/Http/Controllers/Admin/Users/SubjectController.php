<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\CreateFormRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Subject\SubjectService;
use Illuminate\Support\Facades\DB;
class SubjectController extends Controller
{
    //
    protected $subjectService;

    public function __construct(SubjectService $subjectService){
        $this->subjectService = $subjectService;
    }

    public function index(Request $request){
        $result['list'] = DB::table('subjects')->get()->toArray();
        return view('admin.subjects.main', [
            'title'=>'Môn học'], $result);
    }

    public function create(){
        return view('admin.subjects.add',[
            'title'=> 'Thêm môn học'
        ]);
    }

    public function add(CreateFormRequest $request){
        $result = $this->subjectService->create($request);

        return redirect()->back();
    }



}
