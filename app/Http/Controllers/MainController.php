<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\CreateFormRequest;
use App\Http\Services\post\postservice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Services\User\UserService;
use App\Models\Documents;
use App\Models\posts;
use App\Models\questions;

class MainController extends Controller
{
    //

    protected $postService;

    public function __construct(Postservice $postService){
        $this->postService = $postService;
    }
    public function index(Request $request){
        // dd(request());
        $data = Documents::orderby('created_at','DESC')->paginate(15);
        if($key=request()->key){
            $data = Documents::orderby('created_at','DESC')->where('name','like','%'.$key.'%')->paginate(15);

        }
        return view('home', ['title'=>'TUHOC - Trang chia sẻ kiến thức miễn phí'], compact('data'));
    }
    public function login(){
        return view('auth.login',['title'=>'Trang đăng nhập | TUHOC']);
    }

    // public function register(){
    //     return view('auth.register',['title'=>'Đăng ký tài khoản | TUHOC']);
    // }

    public function manage(Request $request){
        $this->validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email'=>$request->input('email'),
        'password' => $request->input('password'), 'role'=>'0', 'status'=>'1'],
        $request->input('remember'))){

            return redirect()-> route('user/{id}');
        }


        Session()->flash('error', 'Email hoặc mật khẩu không chính xác');
        return redirect()->back();

    }



    public function showRegister(){
        return view('auth.register');
    }

    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 0;
        $user->status = 1;
        $user->save();
        return redirect()->route('showRegister')->with('Thành công!!');
    }

    public function detail(Request $request){
        $result['info'] = DB::table('documents')->where('id', $request->id)->get()->toArray();
        return view('user.detailDocument', [
            'title'=>'{{Xem tài liệu}}'], $result);
    }

    // test layout
    // public function testing(){
    //     return view('test', [
    //         'title'=>'Xem tài liệu']);
    // }

    public function detailDocument(Request $request){
        // dd(request()->key);
        $result['info'] = DB::table('documents')->where('id', $request->id)->get()->toArray();
        return view('detailDocument', [
            'title'=>'Xem chi tiết tài liệu'], $result);
    }

    public function forum(Request $request){
        $data = posts::orderby('created_at','DESC')->paginate(15);
        if($key=request()->key){
            $data = posts::orderby('created_at','DESC')->where('content','like','%'.$key.'%')->paginate(15);

        }
        return view('post', ['title'=>'Diễn đàn - TUHOC'], compact('data'));

    }

    public function viewPost(Request $request){
        $result['info'] = DB::table('posts')->where('id', $request->id)->get()->toArray();
        return view('detailPost', [
            'title'=>'Xem bài viết'], $result);
    }

    public function createPost(){

        return view('createPost',[
            'title'=> 'Viết bài']);
    }

    public function addPost(CreateFormRequest $request){
        $result = $this->postService->create($request);

        return redirect()->back();

    }
    public function store(Request $request){
        posts::create($request->all());

        return redirect()->route('forum')->with('msg','Đăng bài thành công!');

    }

    public function exam(Request $request){
        $data = questions::orderby('created_at','DESC')->paginate(15);
        if($key=request()->key){
            $data = posts::orderby('created_at','DESC')->where('title','like','%'.$key.'%')->paginate(15);

        }
        return view('exam', ['title'=>'Kiểm tra - TUHOC'], compact('data'));

    }

    public function detailExam(Request $request){
        $data = DB::table('questions')->where('id', $request->id)->get()->toArray();

        return view('detailExam', ['title'=>'Kiểm tra - TUHOC'], compact('data'));

    }

    public function getScore(Request $request){
        $data = DB::table('questions')->where('id', $request->id)->get()->toArray();

        // $request = $request->all();

        // return redirect('/detailExam{id}')->with('msg','ok');
        $data = DB::table('questions')->where('id', $request->id)->get()->toArray();

        return view('getScore', ['title'=>'Kiểm tra - TUHOC'], compact('data'));
    }

    public function documentsBySubjects(Request $request){
        // dd(request()->name);
        // $data = Documents::orderby('created_at','DESC')->where('subject', $request->name);
        $data = DB::table('documents')->where('subject', $request->name)->get()->toArray();

        return view('documentsBySubjects', ['title'=>'TUHOC - Trang chia sẻ kiến thức miễn phí'], compact('data'));
    }


}
