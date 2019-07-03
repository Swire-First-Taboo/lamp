<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>登录</title>
    </head>
    <body>
        <form action="/brands" method="post">
            用户名:<input type="text" name="name"><br />
            密码:<input type="password" name="pwd"><br />
            邮箱:<input type="text" name="email" value="{{old('email')}}"><br />
            电话:<input type="text" name="phone" value="{{old('phone')}}"><br />
            {{csrf_field()}}
            <input type="submit" value="登录">
        </form>
    </body>
</html>