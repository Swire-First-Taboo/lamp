<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>@yield("title")</title>
        <style>
            #header{width:100%;height:250px;background:red;}
            #footer{width:100%;height:250px;background:green;}
        </style>
    </head>
    <body>
        <div id="header">header</div>
        @section("main")
        @show
        <div id="footer">footer</div>
    </body>
</html>