<?php

namespace App\Http\Controllers;

use DB;

class ZhouController extends Controller
{
function show(){
    $res= DB::select("select * from cont");
    return view('show',['res'=>$res]);
}
    public function add(){//添加页面
        $res = DB::select("select * from cont WHERE id=1");
        return view('add',['res'=>$res]);
    }
    public function doadd(){//执行添加
        $name  = isset($_GET['name'])?$_GET['name']:'';

        $res = DB::insert("insert into cont (name) VALUES ('$name')");
        if($res){
            return redirect('show');
        }else{
            return "添加失败";
        }
    }
}
