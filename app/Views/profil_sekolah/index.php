<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Profil Sekolah</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal" data-parsley-validate action="<?= base_url('profilsekolah/create') ?>" method="post" id="demo-form2">
                            <?= csrf_field(); ?>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 ">Nama Sekolah</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control" type="text" name="nama_sekolah" id="nama_sekolah" placeholder="" required="required" />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 ">Email</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control" type="email" name="email" id="email" placeholder="" required="required" />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 ">Tlp/No.Hp</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control" type="number" name="tlp" id="tlp" placeholder="" required="required" />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 ">Alamat Sekolah</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <textarea class="resizable_textarea form-control" name="alamat" id="alamat" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 ">Kecamatan</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control" type="text" name="kecamatan" id="kecamatan" placeholder="" required="required" />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 ">Kabupaten</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control" type="text" name="kabupaten" id="kabupaten" placeholder="" required="required" />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 ">Kode Pos</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control" type="number" name="kodepos" id="kodepos" placeholder="" required="required" />
                                </div>
                            </div>
                            <!-- <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 ">Nama Kepala Sekolah</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control" type="text" name="kepsek" id="kepsek" placeholder="" required="required" />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 ">Logo Sekolah</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control" type="file" name="logo" id="logo" placeholder="" required="required" />
                                </div>
                            </div> -->
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-success">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(''); ?>