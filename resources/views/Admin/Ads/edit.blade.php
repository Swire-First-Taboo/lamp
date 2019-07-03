<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>广告修改</title>
    </head>
    <body>
        <form action="/ads/2" method="post">
            标题:<input type="text" name="title"><br />
            内容:<input type="text" name="content"><br />
            {{method_field("PUT")}}
            {{csrf_field()}}
            <input type="submit" value="修改">
        </form>
    </body>
</html>