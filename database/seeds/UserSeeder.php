<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $adminRole = Role::whereName('administrator')->first();
        $userRole = Role::whereName('user')->first();

        $user = User::create(array(
            'first_name'    => 'Ronald',
            'last_name'     => 'Windwaai',
            'email'         => 'ronaldwindwaai@gmail.com',
            'password'      => Hash::make('admin')
        ));
        $user->assignRole($adminRole);

        $user = User::create(array(
            'first_name'    => 'Wensey',
            'last_name'     => 'Khoases',
            'email'         => 'wenseyk@gmail.com',
            'password'      => Hash::make('mylove')
        ));
        $user->assignRole($userRole);
    }
}
