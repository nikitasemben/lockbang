<form action="" method="post">
    @csrf
    <div class="modal fade" id="addMapel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Matapelajaran</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3"><label for="exampleFormControlInput1">Nama Matapelajaran</label><input
                                class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="contoh : Bahasa Indonesia">
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput1">Jurusan</label><input
                                class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="contoh : 123456789">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Kelompok</label>
                            <select class="form-control" id="exampleFormControlSelect1">>
                                <option selected>Kelompok</option>
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
