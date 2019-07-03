@include("Admin.view.header")
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>模版</title>
    </head>
    <body>
        <h1>这是模版</h1>
        <h1>解析数据:{{$a}}</h1>
        <h1>函数解析：{{time()}}</h1>
        <!-- laravel5.4不支持or,只能使用??(三元运算符) -->
        <h1>设置默认值：{{$username ?? 'hahaha'}}</h1>
        <h1>显示html代码:{{!!$name!!}}</h1>
        <h1>流程控制</h1>
        @if($c==10)
        范冰冰
        @elseif($c>10)
        黄晓明
        @else
        baby
        @endif
        <h1>循环控制</h1>
        @for($i=1;$i<=10;$i++)
        {{$i}}
        @endfor
        <h1>一维数组的获取</h1>
        {{$arr1['name']}}
        {{$arr1['age']}}
        <h1>二维数组的获取</h1>
        {{$arr2[0]['name']}}
        <h1>二维数组的遍历</h1>
        <table border="1px" width="400px">
            <tr>
                <th>名字</th>
                <th>年龄</th>
            </tr>
            @foreach($arr2 as $val)
            <tr>
                <td>{{$val['name']}}</td>
                <td>{{$val['age']}}</td>
            </tr>
            @endforeach
        </table>
        </form>
    </body>
</html>