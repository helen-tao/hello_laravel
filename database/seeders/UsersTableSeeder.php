<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // 生成数据集合
        User::factory()->count(10)->create();

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'helen';
        $user->email = 'yun.helen.tao@gmail.com';
        $user->avatar = 'http://homestead.test/uploads/images/avatars/202210/07/1_1665104191_pmduVnOUPs.jpg';
        $user->save();
    }
}
