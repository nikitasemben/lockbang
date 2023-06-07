<form action="" method="post">
    @csrf
    <div class="modal fade" id="addJurusan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Jurusan</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3"><label for="exampleFormControlInput1">Nama Jurusan</label><input
                                class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="contoh : Akuntasi">
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
