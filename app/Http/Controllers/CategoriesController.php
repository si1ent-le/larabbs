<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class CategoriesController extends Controller
{
    //
    public function show(Category $category)
    {
        //读取分类ID，并按照每页显示20条数据
        $topics = Topic::where('category_id',$category->id)->paginate(10);
        //传参变量话题和分类到模版中
        return view('topics.index',compact('topics','category'));
    }
}
