<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //生成数据集合
        $users = factory(User::class)->times(10)->create();

        //单独为第一个用户指定信息
        $user = User::find(1);
        $user->name = 'si1ent';
        $user->email = 'si1ent@qq.com';
        $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png';
        $user->save();
    }
}
