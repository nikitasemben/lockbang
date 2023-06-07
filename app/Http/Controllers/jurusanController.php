<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jurusanController extends Controller
{
    public function data()
    {
        return view('admin.data.Jurusan.index');
    }
}
