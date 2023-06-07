@extends('admin.app')

@section('title', 'Siswa')

@section('contents')
    @if (session('status'))
        <div class="alert alert-success"> {{ session('status') }}</div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Siswa</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addSiswa"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Tambah Data </button>
                </div>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No Induk</th>
                            <th>NIS</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Telp</th>
                            <th>Tempat Lahir</th>
                            <th>Agama</th>
                            <th>Tanggal Lahir</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($siswa as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->no_induk }}</td>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->nama_siswa }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{ $item->telp }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->tgl_lahir }}</td>
                                <td> <img src="{{ asset('imgsiswa/' . $item->img) }}" alt="" style="width:80px;">
                                </td>
                                <td><a href="" class="btn btn-warning" type="button" data-toggle="modal"
                                        data-target="#editSiswa">Edit</a>
                                    <a href="" class="btn btn-danger" type="button" data-toggle="modal"
                                        data-target="#deleteSiswa">Hapus</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.data.siswa.modal.add')
    @include('admin.data.siswa.modal.delete')
    @include('admin.data.siswa.modal.edit')

@endsection
