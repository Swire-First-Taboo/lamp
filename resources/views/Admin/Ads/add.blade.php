<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>广告添加</title>
    </head>
    <body>
        <form action="/ads" method="post">
            标题:<input type="text" name="title"><br />
            内容:<input type="text" name="content"><br />
            {{csrf_field()}}
            <input type="submit" value="提交">
        </form>
    </body>
</html>