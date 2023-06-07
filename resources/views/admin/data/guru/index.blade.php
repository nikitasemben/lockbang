@extends('admin.app')

@section('title', 'guru')

@section('contents')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Guru</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addGuru"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Tambah Data </button>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Card</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Mata Pelajaran</th>
                            <th>Kode</th>
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
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td><a href="" class="btn btn-warning" type="button" data-toggle="modal"
                                    data-target="#editGuru">Edit</a>
                                <a href="" class="btn btn-danger" type="button" data-toggle="modal"
                                    data-target="#deleteGuru">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.data.guru.modal.add')
    @include('admin.data.guru.modal.delete')
    @include('admin.data.guru.modal.edit')

@endsection
