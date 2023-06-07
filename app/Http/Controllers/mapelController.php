<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mapelController extends Controller
{
    public function data()
    {
        return view('admin.data.mapel.index');
    }
}
