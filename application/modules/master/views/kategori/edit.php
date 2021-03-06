<div class="modal fade" id="ModalEdit<?= $row->kd_kategori ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kategori</h4>
            </div>
            <?= form_open(base_url($tombol['edit'] . $row->kd_kategori)) ?>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Kode Kategori</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="kd_kategori" required value="<?= $row->kd_kategori ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Kategori</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nm_kategori" required value="<?= $row->nm_kategori ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Kategori Induk</label>
                        </div>
                        <div class="col-md-9">
                            <select name="is_parent" class="form-control select2" id="">
                                <option value="">-- Kategori Induk --</option>
                                <?php foreach ($is_parent as $kat) { ?>
                                    <option value="<?= $kat->kd_kategori; ?>" <?php if ($row->is_parent != '') {
                                                                                    if ($kat->kd_kategori == $row->kd_kategori) {
                                                                                        echo "selected";
                                                                                    }
                                                                                } ?>><?= $kat->nm_kategori; ?></option>
                                <?php } ?>
                            </select>
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