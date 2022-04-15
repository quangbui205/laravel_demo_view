<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function list()
    {
        return 'List User 13355844';
    }

    public function create()
    {
        return 'Create User';
    }

    public function profile($id)
    {
        return 'profile User: ' . $id;
    }

}
