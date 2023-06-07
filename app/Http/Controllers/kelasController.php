<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function data()
    {
        return view('admin.data.kelas.index');
    }
}
