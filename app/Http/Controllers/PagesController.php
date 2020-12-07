<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //新增root动作，如之前定义的路由别名就是指向rot
    public function root()
    {
        //视图这里指定到pages目录下的root子视图文件
        return view('pages.root');
    }
}
