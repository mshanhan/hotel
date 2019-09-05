<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class IndexController extends Controller
{
    //前台首页
    public function index()
    {
        return view('/index/index');
    }
    public function booking()
    {
        return view('/index/booking');
    }
    public function bookings()
    {
        return view('/index/bookings');
    }
    public function contact()
    {
        return view('/index/contact');
    }
    public function destination()
    {
        return view('/index/destination');
    }
    public function details()
    {
        return view('/index/details');
    }
    public function detail()
    {
        return view('/index/detail');
    }
    public function leixing()
    {
        return view('/index/leixing');
    }
    public function leixings()
    {
        return view('/index/leixings');
    }
    public function payment()
    {
        return view('/index/payment');
    }

    public function payments()
    {
        return view('/index/payments');
    }

    public function reservation()
    {
        return view('/index/reservation');
    }

    public function rooms()
    {
        return view('/index/rooms');
    }

    public function search()
    {
        return view('/index/search');
    }

    public function xufei()
    {
        return view('/index/xufei');
    }
     public function xufeis()
    {
        return view('/index/xufeis');
    }

}