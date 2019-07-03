<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>广告列表</title>
    </head>
    <body>
        <table border="1px" width="400px">
            <tr>
                <th>ID</th>
                <th>标题</th>
                <th>内容</th>
                <th>操作</th>
            </tr>
            <tr>
                <td>1</td>
                <td>cxk</td>
                <td>唱跳rap</td>
                <td><button>删除</button><button>修改</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>真cxk</td>
                <td>唱跳rap</td>
                <td><form action="/ads/2" method="post">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <input type="submit" value="删除">
                </form><a href="/ads/2/edit">修改</a></td>
            </tr>
        </table>
    </body>
</html>