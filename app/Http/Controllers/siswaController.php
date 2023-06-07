<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class siswaController extends Controller
{
    public function data()
    {
        $siswa = DB::table('siswa')->get();
        //return view('admin.data.siswa.index', compact('siswa'));
        return view('admin.data.siswa.index', ['siswa' => $siswa]);
        //return view('admin.data.siswa.index')->with('siswa', $siswa);
    }

    public function add()
    {
    }

    public function addProses(Request $request)
    {

        // DB::table('siswa')->insert(
        //     [
        //         'no_induk' => $request->no_induk,
        //         'nis' => $request->nis,
        //         'nisn' => $request->nisn,
        //         'nama_siswa' => $request->nama_siswa,
        //         'jk' => $request->jk,
        //         'telp' => $request->telp,
        //         'tempat_lahir' => $request->tempat_lahir,
        //         'agama' => $request->agama,
        //         'tgl_lahir' => $request->tgl_lahir,
        //         'img' => $request->img

        //     ]
        // );
        $data = siswa::create($request->all());
        if ($request->hasFile('img')) {
            $request->file('img')->move('imgsiswa/', $request->file('img')->getClientOriginalName());
            $data->img = $request->file('img')->getClientOriginalName();
            $data->save();
        }

        return redirect('siswa')->with('status', 'Data berhasil ditambahkan');
    }
}
