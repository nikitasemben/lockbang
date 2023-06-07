<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hariController extends Controller
{
    public function data()
    {
        return view('admin.data.hari.index');
    }
}
