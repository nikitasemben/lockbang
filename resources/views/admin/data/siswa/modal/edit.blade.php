<form action="" method="post">
    @csrf
    <div class="modal fade" id="editSiswa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Siswa</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3"><label for="exampleFormControlInput1">No Induk</label><input
                                class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="contoh : 123456789">
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput1">NIS</label><input class="form-control"
                                id="exampleFormControlInput1" type="text" placeholder="contoh : 123456789">
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput1">NISN</label><input
                                class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="contoh : 123456789">
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput1">Nama</label><input
                                class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="contoh : Agus">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" id="exampleFormControlSelect1">>
                                <option selected>Jenis Kelamin</option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput1">Telpon</label><input
                                class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="contoh : 08xxxxxxxxx">
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput1">Tempat Lahir</label><input
                                class="form-control" id="exampleFormControlInput1" type="text">
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput1">Tanggal Lahir</label><input
                                class="form-control" id="exampleFormControlInput1" type="date">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Agama</label>
                            <select class="form-control" id="exampleFormControlSelect1">>
                                <option selected>Agama</option>
                                <option value="1">Katolik</option>
                                <option value="2">Kristen</option>
                                <option value="1">Islam</option>
                                <option value="2">Hindu</option>
                                <option value="1">Buddha</option>
                                <option value="2">Konghucu</option>
                                <option value="2">dll</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
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
</form>
