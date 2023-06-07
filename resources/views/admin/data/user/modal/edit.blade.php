<form action="" method="post">
    @csrf
    <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Guru</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3"><label for="exampleFormControlInput1">Username</label><input
                                class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="contoh : 123456789">
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput1">Email</label><input
                                class="form-control" id="exampleFormControlInput1" type="email"
                                placeholder="contoh : gmail.com">
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput1">Password</label><input
                                class="form-control" id="exampleFormControlInput1" type="password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Level</label>
                            <select class="form-control" id="exampleFormControlSelect1">>
                                <option selected>Level</option>
                                <option value="1">Admin</option>
                                <option value="2">Wali</option>
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
