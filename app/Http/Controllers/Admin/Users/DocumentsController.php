<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\document\CreateFormRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Services\Document\DocumentService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use League\CommonMark\Node\Block\Document;
class DocumentsController extends Controller
{
    //
    protected $documentService;

    public function __construct(DocumentService $documentService){
        $this->documentService = $documentService;
    }
    public function index(){
        $data['list'] = DB::table('documents')->get()->toArray();
        return view('admin.documents.main', [
            'title'=>'Tài liệu'], $data);

    }

    public function create(){
        $result['listSubject'] = DB::table('subjects')->get()->toArray();
        return view('admin.documents.add',[
            'title'=> 'Thêm tài liệu'], $result);
    }

    public function add(CreateFormRequest $request){
        $result = $this->documentService->create($request);

        return redirect()->back();
    }

    // public function add(Request $request){

    //     $data= array();

    //     $data['name']= $request->name;
    //     $data['content']= $request->content;
    //     $data['subject']= $request->subject;
    //     $data['class']= $request->class;
    //     // $data['file']= $request->file;
    //     $data['status']= $request->status;

    //     $pathFile = 'public/uploads/documents/';

    //     $getFile = $request->file('file');
    //     if($getFile){
    //         $getNameFile=$getFile->getClientOriginalName();
    //         $nameFile = current(explode('.',$getNameFile));
    //         $newFile = $nameFile.rand(0,99).'.'.$getFile->getClientOriginalExtension();
    //         $getFile->move($pathFile, $newFile);
    //         $data['file']=$newFile;
    //     }

    //     DB::table('documents')->insert($data);
    //     return Redirect::to('/admin/documents');

    // }
    public function detail(Request $request){
        $result['info'] = DB::table('documents')->where('id', $request->id)->get()->toArray();
        return view('admin.documents.detail', [
            'title'=>'Xem chi tiết tài liệu'], $result);
    }

    public function delete(Request $request){
        DB::table('documents')->where('id', $request->id)->delete();
        return redirect('/admin/documents/main');
    }
    public function edit(Request $request){

        $result['info'] = DB::table('documents')->where('id', $request->id)->get()->toArray();

        return view('admin.documents.edit',[
            'title'=> 'Chỉnh sửa tài liệu'], $result);
    }

    public function update(Request $request){
        DB::table('documents')->where('id', $request->id)->update([
            'name'=>$request->name,
            'content'=>$request->content,
            'subject'=>$request->subject,
            'class'=>$request->class,
            'status'=>$request->status

        ]);
        return redirect('/admin/documents/main');
    }
}
