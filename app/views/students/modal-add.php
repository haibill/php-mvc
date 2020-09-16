<!-- Modal -->
<div class="modal fade" id="formModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel"></h5>
                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL . '/students/create' ?>" method="post">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label><b>Name <span style="color: tomato;">*</span></b></label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="ex: Laras Permatasari">
                    </div>
                    <div class="form-group">
                        <label><b>NIM <span style="color: tomato;">*</span></b></label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="ex: 6703160060">
                    </div>
                    <div class="form-group">
                        <label><b>Email <span style="color: tomato;">*</span></b></label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="ex: laras@gmail.com">
                    </div>
                    <div class="form-group">
                        <label><b>Prodi <span style="color: tomato;">*</span></b></label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="ex: D3 Perhotelan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>