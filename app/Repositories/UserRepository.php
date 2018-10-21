<?php
/**
 * Created by PhpStorm.
 * User: Hider
 * Date: 2018/10/21
 * Time: 17:50
 */

namespace App\Repositories;


use App\User;

class UserRepository
{
    public function byId($id)
    {
        return User::find($id);
    }
}