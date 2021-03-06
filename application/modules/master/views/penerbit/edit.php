<div class="modal fade" id="ModalEdit<?= $row->kd_penerbit ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Penerbit</h4>
            </div>
            <?= form_open(base_url($tombol['edit'] . '/' . $row->kd_penerbit)) ?>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Kode Penerbit</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="kd_penerbit" required value="<?= $row->kd_penerbit ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Penerbit</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nm_penerbit" required value="<?= $row->nm_penerbit ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?= form_close() ?>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->