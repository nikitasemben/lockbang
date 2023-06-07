<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jadwalController extends Controller
{
    public function data()
    {
        return view('admin.data.jadwal.index');
    }
}
