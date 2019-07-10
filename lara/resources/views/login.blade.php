<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <table>
        @foreach($res as $k=>$v)
            <tr>
                <td><a href="zt?id=<?php echo $v->id?>"><?php echo $v->nam?></a></td>
            </tr>
            @endforeach
    </table>
</body>
</html>