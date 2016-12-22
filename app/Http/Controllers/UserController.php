<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function index()
    {
        return view('user',compact('id',$this->getUserId()));
    }

}
