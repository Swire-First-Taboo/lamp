<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>模版</title>
    </head>
    <body>
        <table border="1px" width="400px">
            <tr>
                <th>ID</th>
                <th>名字</th>
                <th>年龄</th>
            </tr>
            @foreach($page as $val)
            <tr>
                <td>{{$val['id']}}</td>
                <td>{{$val['name']}}</td>
                <td>{{$val['age']}}</td>
            </tr>
            @endforeach

        </table>
            {{$page->render()}}
    </body>
</html>