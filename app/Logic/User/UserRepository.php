<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 19/09/2016
 * Time: 12:06
 */

namespace App\Logic\User;

use App\Role;
use App\User;
use Hash;


class UserRepository
{
    public function register($data)
    {

        $user = new User;
        $user->email = $data['email'];
        $user->first_name = ucfirst($data['first_name']);
        $user->last_name = ucfirst($data['last_name']);
        $user->password = Hash::make($data['password']);
        $user->save();

        //Assign Role
        $role = Role::whereName('user')->first();
        $user->assignRole($role);

    }
}