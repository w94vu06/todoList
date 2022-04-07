<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SnailController extends Controller
{
    //主頁面 逐筆顯示資料
    public function index()
    {
        $data = DB::table('tstory')->get();
        return view('pages.snail_index',compact('data',$data));
    }

    //進入新增頁面
    public function get_create_page(){
        return view('pages.snail_create');
    }
    //新增資料
    public function store_create_data (Request $request)
    {
        $name = $request->get('t_name');
        $phone = $request->get('t_phone');

        DB::table('tstory')->insert([
            't_name' => $name,
            't_phone' => $phone,
        ]);
        return redirect()->route('snail_index');
    }

    //修改
    public function get_edit_page(Request $request)
    {
        $t_id = $request->get('id');
        $data = DB::table('tstory')
            ->where('t_id', $t_id)
            ->first();
//        dd($data);
        return view('pages.snail_update',compact('data',$data));
    }
    public function store_edit_data(Request $request)
    {
        $t_id = $request->get('id');
        $name = $request->get('t_name');
        $phone = $request->get('t_phone');
        $test = DB::table('tstory')
            ->where('t_id', $t_id)
            ->update([
                't_name' => $name,
                't_phone' => $phone,
            ]);
        return redirect()->route('snail_index');
    }

    //刪除
    public function delete_data(Request $request)
    {
        $id = $request->get('id');
        DB::table('tstory')
            ->where('t_id', $id)
            ->delete();
        return redirect()->route('snail_index');
    }
}
