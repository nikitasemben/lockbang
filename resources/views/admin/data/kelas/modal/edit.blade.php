<form action="" method="post">
    @csrf
    <div class="modal fade" id="editKelas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kelas</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3"><label for="exampleFormControlInput1">Nama Kelas</label><input
                                class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="contoh : XII-1">
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput1">Jurusan</label><input
                                class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="contoh : 123456789">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Wali Kelas</label>
                            <select class="form-control" id="exampleFormControlSelect1">>
                                <option selected>Wali Kelas</option>
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
