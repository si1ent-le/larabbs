<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Handlers\ImageUploadHandler;
use Auth;

class UsersController extends Controller
{
    //使用__construct构造器方法来对除了show访问以外均要进行用户身份认证
    public function __construct()
    {
        //必须引用Auth类来实现用户认证
        $this->middleware('auth',['except' => ['show']]);
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    public function edit(User $user)
    {
        $this->authorize('update',$user);
        return view('users.edit',compact('user'));
    }
    public function update(UserRequest $request,ImageUploadHandler $uploader, User $user)
    {
        //dd($request->avatar);
        //赋值变量，方便进行数据更新操作，
        $this->authorize('update',$user);
        $data = $request->all();
        if ($request->avatar){
            $result = $uploader->save($request->avatar,'avatars', $user->id, 410);
            if($result){
                $data['avatar'] = $result['path'];
            }
        }
        $user->update($data);
        return redirect()->route('users.show',$user->id)->with('success','个人资料更新成功');
    }

    // //默认头像
    // public function getAvatarDefault($value)
    // {
    //     if (empty($value))
    //     {
    //         return "https://avatars1.githubusercontent.com/u/56815669?s=60&v=4";
    //     }
    //     return $value;
    // }

}
