<form action="" method="post">
    @csrf
    <div class="modal fade" id="deleteJadwal" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Delete</h5>
                </div>
                <div class="modal-body">
                    <p>Yakin menghapus data tersebut?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-secondary" type="button"
                        data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Yakin</button>
                </div>
            </div>
        </div>
    </div>
</form>
