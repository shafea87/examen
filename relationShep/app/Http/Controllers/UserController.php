<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;

class UserController extends Controller
{
    public function insertRecord()
    {
        $phone = new Phone();
        $phone->phone = '35342642';
        $user = new User();
        $user->name = 'Tom';
        $user->email = 'toms';
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return'Record has been created';
    }
}
