<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\Models\User::class)->times(50)->make();
        \App\Models\User::insert($users->makeVisible(['password','remember_token'])->toArray());

        $user = \App\Models\User::find(1);
        $user->name = 'Yolver';
        $user->email = '735405853@qq.com';
        $user->password = bcrypt('shudianxiu');
        $user->is_admin = true;
        $user->save();
        $user = \App\Models\User::find(2);
        $user->name = 'test';
        $user->email = 'test@qq.com';
        $user->password = bcrypt('123123');
        $user->save();
    }
}
