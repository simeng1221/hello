<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class XiaoController extends Controller
{
    public  function  add(){
        $res = DB::select("select * from xiaosh ");
        return view('add',['res'=>$res]);
    }
    public  function doadd(){
        $title = $_GET['title'];
        $content = $_GET['content'];
        $author = $_GET['author'];
        $count = $_GET['count'];
        $res = DB::insert("insert into xiaosh (title,content,author,count) VALUES ('$title','$content','$author','$count')");
       if($res){
           return redirect('show');
       }else{
           alert("添加失败");
       }
    }
    public function show(){
        $res = DB::select("select * from xiaosh ORDER BY count desc");
        return view('show',['res'=>$res]);
    }
    public function dell(){
        $id = $_GET['id'];
        $res = DB::delete("delete from xiaosh where id = '$id'");
        return redirect('show');
    }
    public function xiang(){
        $id = $_GET['id'];
        $res = DB::select("select * from xiaosh WHERE id='$id'");
        return view('xiang',['res'=>$res]);
    }
    public function selname(){
        $title  = isset($_GET['title'])?$_GET['title']:'';
        $res = DB::select("select * from xiaosh where title LIKE '%$title%'");
        return view('show',['res'=>$res]);
    }
    public function sui(){
        $res = DB::select(" select * from xiaosh order by rand() limit 1");
        return view('sui',['res'=>$res]);
    }
}
