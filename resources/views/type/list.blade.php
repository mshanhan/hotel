@extends('layouts.app')

@section('body')

    <link rel="stylesheet" href="/admin/css/pintuer.css">
    <link rel="stylesheet" href="/admin/css/admin.css">
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/pintuer.js"></script>
    <body>
    <link rel="stylesheet" href="{{asset('layui/layui.js')}}">
    <link rel="stylesheet" href="{{asset('layui/layui.css')}}">

    <table class="layui-table" align="center" >
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
        <tr>
            <th>ID</th>
            <th>类型名称</th>
            <th>创建时间</th>
            <th>操作</th>
        </tr>
        </thead>
        @foreach ($res as $v)
            <tbody>
            <tr>
                <td>{{$v->type_id}}</td>
                <td>{{$v->type_name}}</td>
                <td>{{date("Y-m-d h:i:s" , $v->create_time)}}</td>
                <td><a href="javascript:;" class="del" type_id='{{$v->type_id}}'>删除</a>||<a href="/type/update/{{$v->type_id}}">修改</a></td>
            </tr>
            </tbody>
        @endforeach
    </table>
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script>
        $(function(){
            $(".del").click(function(){
                var _this=$(this);
                var type_id=_this.attr('type_id');
                //console.log(n_id);
                $.post(
                    "/type/del",
                    {type_id:type_id},
                    function(res){
                        // console.log(res);
                        if(res.code==1 ){
                            var f=confirm("确定要删除吗？");
                            if(f == true){
                                location.href='/type/list';
                            }
                        }else{
                            alert(res.msg);
                        }
                    },'json'
                );
            })
        })
    </script>
@endsection