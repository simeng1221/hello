<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>留言</td>
            <td>时间</td>
            <td>操作</td>
        </tr>
        <input type="hidden" value="<?php  echo $id?>" id="jh">
        <tbody id="tb">
            @foreach($res as $k=>$v)
                <tr>
                    <td><?php  echo  $v->id?></td>
                    <td><?php echo $v->name?></td>
                    <td><?php echo date("Y-m-d H:i:s",time())?></td>
                    <td><a href="#"  class="dele" id="<?php  echo $v->id?>">删除</a></td>
                </tr>
            @endforeach
        </tbody>

    </table>
    @for($i=1;$i<=$end;$i++){
    <a href="#" class="pagee" i="<?php echo $i ?>"><?php echo $i?></a>
    }
    @endfor
</body>
</html>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script>
    $(document).on("click",".pagee",function () {
        i=$(this).attr("i");
        id=$("#jh").val();
        $.ajax({
            url:"fy",
            type:"post",
            dataType:"json",
            data:{
                page:i,
                id:id
            },
            success:function (data) {
                console.log(data);
                str="";
                $.each(data,function (k,v) {
                    str+='<tr>'
                    str+='<td>'+v.id+'</td>'
                    str+='<td>'+v.name+'</td>'
                    str+='<td><?php echo date("Y-m-d H:i:s",time())?></td>'
                    str+='</tr>'
                })
                $("#tb").html(str);
            }
        })
    })


    $(document).on("click",".dele",function () {
        id=$(this).attr("id");
        $.ajax({
            url:"del",
            type:"post",
            dataType:"json",
            data:{
                id:id
            },
            success:function (data) {
                console.log(data);
                if(data==1){
                location.href=""
                }
            }
        })
    })
</script>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$zhus[0]->nam}}</h1>
<table>
    @csrf
    <tr>
        <td>留言</td>
        <td><input type="text" name="name" id="name"></td>
        <input type="hidden" value="<?php echo $id?>" id="jh" >

    </tr>
    <tr>
    <td><input type="button" class="but" value="提交"></td>
    </tr>
</table>
</body>
</html>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script>
    $(document).on("click",".but",function () {
        nam = $("#name").val();
        id = $("#jh").val();
        if(nam){
        $.ajax({
            url:"tian",
            type:"post",
            dataType:"json",
            data:{
                nam:nam,
                id:id
            },
            success:function (data) {
                console.log(data);
                if(data==1){
                    alert("添加成功");
                    location.href=""
                }
            }
        })
        }else{
            alert("不能为空");
        }

    })
</script>