<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoritesController extends Controller
{
    //
    public function index(Request $request){
        $result['info'] = DB::table('favorites')->where('user_id', $request->id)->get()->toArray();

        return view('favorite', [
            'title'=>'Mục yêu thích'], $result);

    }

    public function add(Request $request){

        DB::table('favorites')->insert([
            'user_id'=>$request->user_id,
            'document_id'=>$request->content,


        ]);
        return view('favorite', [
            'title'=>'Mục yêu thích']);

    }
}
