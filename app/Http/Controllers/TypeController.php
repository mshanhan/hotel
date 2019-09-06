<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TypeController extends Controller
{
    /**
     * 添加住房类型
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function add()
    {
        return view('/type/add');
    }
    /**
     * 执行添加
     * @return bool|false|float|int|string
     */
    public function adddo()
    {
        $data=request()->input();
        //dd($data);
        if ($data['type_name']==''){
            return json_encode(['content'=>'必填项不得为空','code'=>2]);
        }

        $data['create_time']=time();
        $res=DB::table('type')->insert($data);
//        dd($res);
        if($res){
            return json_encode(['msg'=>'添加成功','code'=>1]);
        }
    }
    /**
     * 导航栏展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function list()
    {
        $res=DB::table('type')->get();
        //dd($res);
        return view('/type/list',['res'=>$res]);
    }


    /**
     * 删除
     */
    public function del()
    {
        $type_id=request()->post();
        $res=DB::table('type')->where('type_id',$type_id)->delete();
        // dd($res);
        if($res){
            echo json_encode(['msg'=>'删除成功','code'=>1]);
        }else{
            echo json_encode(['msg'=>'删除失败','code'=>0]);
        }
    }

    /**
     * 修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function update()
    {
        $type_id=request()->id;
        $res=DB::table('type')->where('type_id',$type_id)->first();

        return view('/type/update',['res'=>$res]);
    }


    /**
     * 执行修改
     */
    public function doupdate()
    {
        $type_id=request()->type_id;
        $data=request()->input();

        $res=DB::table('type')->where('type_id','=',$type_id)->update($data);
//        dd($res);
        if($res){
            echo json_encode(['msg'=>'修改成功','code'=>1]);
        }
    }
}
