<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function getUserId()
    {
    	return Auth::user()->getId(); 
    }
}
