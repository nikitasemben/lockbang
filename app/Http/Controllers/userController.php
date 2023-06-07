<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function data()
    {
        return view('admin.data.user.index');
    }
}
