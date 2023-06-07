@extends('admin.app')

@section('title', 'Jurusan')

@section('contents')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Jurusan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addJurusan"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Tambah Data </button>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td><a href="" class="btn btn-warning" type="button" data-toggle="modal"
                                    data-target="#editJurusan">Edit</a>
                                <a href="" class="btn btn-danger" type="button" data-toggle="modal"
                                    data-target="#deleteJurusan">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.data.jurusan.modal.add')
    @include('admin.data.jurusan.modal.delete')
    @include('admin.data.jurusan.modal.edit')


@endsection
