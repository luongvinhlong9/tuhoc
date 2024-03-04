<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    Public function index(){
        $result['list'] = DB::table('posts')->get()->toArray();
        return view('admin.posts.main', [
            'title'=>'Bài viết'], $result);
    }

    Public function add(){

    }

    public function delete(Request $request){
        DB::table('posts')->where('id', $request->id)->delete();
        return redirect('/admin/posts/main');
    }
}
