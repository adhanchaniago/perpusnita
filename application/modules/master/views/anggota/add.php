<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tambah Anggota</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                echo form_open_multipart('master/anggota/add');
                ?>

                <form action="" method="post">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <b><label class="pull-right">NIS</label></b>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="NIS" name="kd_anggota">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <b><label class="pull-right">Nomor Anggota</label></b>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Nomor Anggota" name="nomor_anggota">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Nama</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" placeholder="Nama" name="nm_anggota" class="form-control" value="<?= set_value('nm_anggota') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Jurusan</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" placeholder="Jurusan" name="jurusan" class="form-control" value="<?= set_value('jurusan') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Kelas</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" placeholder="Kelas" name="kelas" class="form-control" value="<?= set_value('kelas') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Tempat tanggal lahir</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Tempat Lahir" name="tempat_lahir" class="form-control" value="<?= set_value('tempat_lahir') ?>">
                            </div>
                            <div class="col-md-3">
                                <input type="date" placeholder="Tanggal Lahir" name="tanggal_lahir" class="form-control" value="<?= set_value('tanggal_lahir') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Agama</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" placeholder="Agama" name="agama" class="form-control" value="<?= set_value('agama') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-5">
                                <select name="kelamin" class="form-control">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Alamat</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" placeholder="Alamat" name="alamat" class="form-control" value="<?= set_value('alamat') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">No. Telepon</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" placeholder="No. Telepon" name="no_telepon" class="form-control" value="<?= set_value('no_telepon') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Foto</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" name="foto" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-9">
                                <a href="<?= base_url('master/anggota') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>

                </form>



            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>