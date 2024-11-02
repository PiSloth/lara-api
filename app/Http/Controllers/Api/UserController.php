<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function main()
    {
        dd("Hello World");
    }

    public function test($name)
    {
        dd($name);
    }
}
