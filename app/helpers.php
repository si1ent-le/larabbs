<?php

//用户自定义辅助函数
function route_class()
{
    return str_replace('.','-',Route::currentRouteName());
}
function category_nav_action($category_id)
{
    return active_class((if_route('categories.show') && if_route_param('category',$category_id)));
}
