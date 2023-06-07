<form action="{{ url('siswa') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="addSiswa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Siswa</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3"><label for="no_induk">No Induk</label><input class="form-control"
                                id="no_induk" name="no_induk" type="text" placeholder="contoh : 123456789">
                        </div>
                        <div class="mb-3"><label for="nis">NIS</label><input class="form-control" id="nis"
                                name="nis" type="text" placeholder="contoh : 123456789">
                        </div>
                        <div class="mb-3"><label for="nisn">NISN</label><input class="form-control" id="nisn"
                                name="nisn" type="text" placeholder="contoh : 123456789">
                        </div>
                        <div class="mb-3"><label for="nama_siswa">Nama</label><input class="form-control"
                                id="nama_siswa" name="nama_siswa" type="text" placeholder="contoh : Agus">
                        </div>
                        <div class="mb-3">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="form-control" id="jk" name="jk">>
                                <option selected>Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="mb-3"><label for="telp">Telpon</label><input class="form-control"
                                id="telp" name="telp" type="text" placeholder="contoh : 08xxxxxxxxx">
                        </div>
                        <div class="mb-3"><label for="tempat_lahir">Tempat Lahir</label><input class="form-control"
                                id="tempat_lahir" name="tempat_lahir" type="text">
                        </div>
                        <div class="mb-3"><label for="tgl_lahir">Tanggal Lahir</label><input class="form-control"
                                id="tgl_lahir" name="tgl_lahir" type="date">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Agama</label>
                            <select class="form-control" id="agama" name="agama">>
                                <option selected>Agama</option>
                                <option value="Katolik">Katolik
                                </option>
                                <option value="Kristen">Kristen
                                </option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu
                                </option>
                                <option value="dll">dll</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="img">Foto</label>
                            <input type="file" class="form-control-file" id="img" name="img">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save </button>
                </div>
            </div>
        </div>
    </div>
