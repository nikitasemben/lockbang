<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class waliController extends Controller
{
    public function data()
    {
        return view('admin.data.wali.index');
    }
}
