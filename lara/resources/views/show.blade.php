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
<form action="selname">
    名称<input type="text" name="title">
    <input type="submit" value="搜索">
</form>
    <table>
        <tr>
            <td><a href="sui">随机展示</a></td>
        </tr>
        <tr>
            <td>id</td>
            <td>小说名称</td>
            <td>小说内容</td>
            <td>小说作者</td>
            <td>字数</td>
            <td>操作</td>
        </tr>
    @foreach($res as $k=>$v)
        <tr>
            <td><?php echo $v->id?></td>
            <td><a href="xiang?id=<?php echo $v->id?>"><?php echo $v->title?></a></td>
            <td><?php echo $v->content?></td>
            <td><?php echo $v->author?></td>
            <td><?php echo $v->count?></td>
            <td><a href="dell?id=<?php echo $v->id?>">删除</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>