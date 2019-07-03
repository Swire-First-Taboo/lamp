<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ajax get请求</title>
        <script src="/static/jquery-1.8.3.min.js">

        </script>
    </head>
    <body>
        <button>获取ajax响应数据</button>
    </body>
    <script>
        // alert($);
        $("button").click(function(){
            //Ajax请求数据
            $.get("/doajaxget",{},function(data){
                alert(data);
            });
        })
    </script>
</html>