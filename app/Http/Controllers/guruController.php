<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guruController extends Controller
{
    public function data()
    {
        return view('admin.data.guru.index');
    }
}
