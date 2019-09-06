@extends('layouts.app')

@section('body')

    <link rel="stylesheet" href="/admin/css/pintuer.css">
    <link rel="stylesheet" href="/admin/css/admin.css">
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/pintuer.js"></script>
    <body>
    <div class="panel admin-panel">
        <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改内容</strong></div>
        <div class="body-content">
            <div  class="form-x">
                <input type="hidden" name="type_id" id="type_id" value="{{$res->type_id}}" >
                <div class="form-group">
                    <div class="label">
                        <label>类型名称：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input w50"  name="type_name" id="type_name"  value="{{$res->type_name}}" />
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label></label>
                    </div>
                    <div class="field">
                        <button class="button bg-main icon-check-square-o" type="button" id="btn"> 修改导航栏</button>
                        <button class="button bg-main icon-check-square-o" type="reset"> 重置</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <script>
        $(function(){
            $("#btn").click(function(){
                var type_id=$('#type_id').val();
                var type_name = $("#type_name").val();
                // console.log(n_id);return

                $.post(
                    '/type/doupdate',
                    {type_name:type_name,type_id:type_id},
                    function(res) {
                        // console.log(res);
                        if( res.code == 1){
                            alert(res.msg);
                            location.href="/type/list";
                        }
                    },'json'

                );
            })
        })
    </script>
@endsection

