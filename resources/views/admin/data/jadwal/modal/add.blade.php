<form action="" method="post">
    @csrf
    <div class="modal fade" id="addJadwal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Jadwal</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Hari</label>
                            <select class="form-control" id="exampleFormControlSelect1">>
                                <option selected>Hari</option>
                                <option value="1">A</option>
                                <option value="2">B</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Kelas</label>
                            <select class="form-control" id="exampleFormControlSelect1">>
                                <option selected>Kelas</option>
                                <option value="1">A</option>
                                <option value="2">B</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Mata Pelajaran</label>
                            <select class="form-control" id="exampleFormControlSelect1">>
                                <option selected>Mata Pelajaran</option>
                                <option value="1">A</option>
                                <option value="2">B</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Guru</label>
                            <select class="form-control" id="exampleFormControlSelect1">>
                                <option selected>Guru</option>
                                <option value="1">A</option>
                                <option value="2">B</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Jam Masuk</label>
                            <input class="form-control example" type="text" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Jam Selesai</label>
                            <input class="form-control example" type="text" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Jurusan</label>
                            <select class="form-control" id="exampleFormControlSelect1">>
                                <option selected>Jurusan</option>
                                <option value="1">A</option>
                                <option value="2">B</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Save </button>
                </div>
            </div>
        </div>
    </div>
