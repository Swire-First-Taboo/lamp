<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>ajax post请求</title>
        <script src="/static/jquery-1.8.3.min.js">

        </script>
    </head>
    <body>
        <button>获取ajax响应数据</button>
        {{csrf_field()}}
    </body>
    <script>
        //laravel框架里post请求ajax的时候,有自己专门的csrf保护方式
        //通过jquery类库,将meta标签里的token字符写入到请求标头里
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        // alert($);
        $("button").click(function(){
            //Ajax请求数据
            $.post("/doajaxpost",{},function(data){
                alert(data);
            });
        })
    </script>
</html>