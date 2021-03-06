<button type="button" class="btn btn-warning btn-sx" data-toggle="modal" data-target="#modal-default">
    <i class="fa fa-plus"></i>Tambah
</button>


<a href="<?= base_url('master/penerbit/exportExcel') ?>" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</a>
<a href="<?= base_url('master/penerbit/cetak') ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak</a>

<?= form_open(base_url($tombol['add'])) ?>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Penerbi</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Kode Penerbi</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="kd_penerbit" required value="<?= 'PN' . random_string('numeric', '4') ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Penerbi</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nm_penerbit" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?= form_close() ?>
<!-- /.modal -->