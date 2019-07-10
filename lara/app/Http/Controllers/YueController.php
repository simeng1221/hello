<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as request;
use DB;

class YueController extends Controller
{
  function login(){
      $res = DB::table("zhu")->get();
      return view("login",["res"=>$res]);
  }
  function zt(request $req){
      $page = $req->post("page")?$req->post("page"):1;
      $size = 3;
      $id = $req->post("id");
      $zhuti = DB::select("select *from zhu where id='$id'");
      $pian = ($page-1)* $size;
      $sql = DB::select("select * from cont where uid='$id'");
      $count = count($sql);
      $end = ceil($count/$size);
      $res = DB::select("select * from cont where uid='$id' limit $pian,$size");
      return view("zt",["res"=>$res,"id"=>$id,"end"=>$end,"zhus"=>$zhuti]);
  }
  function  fy(request $req){
      $page = $req->post("page")?$req->post("page"):1;
      $size = 3;
      $id = $req->post("id");
      $sql = DB::select("select * from cont where uid='$id'");
      $pian = ($page-1)* $size;
      $count = count($sql);
      $end = ceil($count/$size);
      $res = DB::select("select * from cont where uid ='$id' limit $pian,$size");
      return json_encode($res);

  }
//ajax添加
   function tian(request $req){
      $name=$req->post("nam");
      $id=$req->post("id");
      $res= DB::insert("insert into cont (`name`,uid) values('$name','$id')");
      if($res){
          echo "1";
      }
   }
//    ajax删除

    function del(request $req){
            $id=$req->post("id");
            $res = DB::delete("delete from cont where id ='$id' ");
            if($res){
                echo "1";
            }
    }
}