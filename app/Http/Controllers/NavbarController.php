<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class NavbarController extends Controller
{
    /**
     * 添加导航栏
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
   */
    public function add()
    {
        return view('/navbar/add');
    }

    /**
     * 执行添加导航栏
     * @return bool|false|float|int|string
     */
    public function adddo()
    {
        $data=request()->input();
        //dd($data);
        if($data['n_name']=='') {
            return json_encode(['msg'=>'不能为空','code'=>2]);
        }
//        if ($data['n_name']==null || $data['weight']==null || $data['status']==null){
//            return json_encode(['content'=>'必填项不得为空','icon'=>5,'code'=>2]);
//        }

        $data['create_time']=time();
        $res=DB::table('navbar')->insert($data);
//        dd($res);
        if($res){
            return json_encode(['msg'=>'添加导航栏成功','code'=>1]);
        }

    }

    /**
     * 导航栏展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function list()
    {
        $res=DB::table('navbar')->where('status',1)->orderby('weight','desc')->get();
        //dd($res);
        return view('/navbar/list',['res'=>$res]);
    }


    /**
     * 删除
     */
    public function del()
    {
        $n_id=request()->post();
        $res=DB::table('navbar')->where('n_id',$n_id)->delete();
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
        $n_id=request()->id;
//        dd($n_id);
        $res=DB::table('navbar')->where('n_id',$n_id)->first();
//        dd($res);

        return view('/navbar/update',['res'=>$res]);
    }


    /**
     * 执行修改
     */
    public function doupdate()
    {
        $n_id=request()->n_id;
//        dd($n_id);
        $data=request()->input();

        $res=DB::table('navbar')->where('n_id','=',$n_id)->update($data);
//        dd($res);
        if($res){
            echo json_encode(['msg'=>'修改成功','code'=>1]);
        }
    }
	

}
