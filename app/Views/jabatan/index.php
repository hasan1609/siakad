<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Jabatan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Struktur</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php if (session()->getFlashdata('pesan')) : ?>
                                        <div class="alert alert-success alert-dismissable show fade">
                                            <div class="alert-body">
                                                Data Berhasil <strong><?= session()->getFlashdata('pesan') ?></strong>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (session()->getFlashdata('err')) : ?>
                                        <div class="alert alert-danger alert-dismissable show fade text-light">
                                            <div class="alert-body">
                                                <?= session()->getFlashdata('err') ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <button type="button" data-toggle="modal" data-target=".modalTambahJabatan" class="btn btn-round btn-primary btn-xs mb-3"><i class="fa fa-plus"></i> Tambah Data</button>
                                    <div class="card-box table-responsive">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jabatan</th>
                                                    <th>Nama</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($jabatan as $row) : ?>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><?= $row['nama_jabatan']; ?></td>
                                                        <td></td>
                                                        <td>
                                                            <button type="button" class="btn btn-round btn-warning btn-sm" data-toggle="modal" data-target=".modalEditJabatan" id="btn-editjabatan" data-id="<?= $row['id_jabatan']; ?>" data-nama="<?= $row['nama_jabatan']; ?>"><i class="fa fa-edit"></i> Ubah</button>
                                                            <!-- method http spofing -->
                                                            <form action="/jabatan/delete/<?= $row['id_jabatan']; ?>" method="post" class="d-inline">
                                                                <?= csrf_field() ?>
                                                                <input type="hidden" name="_mehod" value="DELETE">
                                                                <button type="submit" class="btn btn-round btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus ? ');"><i class="fa fa-trash"></i> Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3>Struktur Sekolah</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>>
    </div>
</div>

<!-- modal tambah data -->
<div class="modal fade modalTambahJabatan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jabatan</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('jabatan/add') ?>" method="post" data-parsley-validate>
                    <?= csrf_field(); ?>
                    <label for="nama_jabatan">Nama Jabatan* :</label>
                    <input type="text" id="nama_jabatan" class="form-control" name="nama_jabatan" required />
                    <div class="mt-3">
                        <label>
                            <input type="checkbox" class="js-switch" checked /> Checked
                        </label>
                    </div>
                    <select class="select2_group form-control">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- modal edit data -->
<div class="modal fade modalEditJabatan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Jabatan</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('jabatan/edit') ?>" method="post" data-parsley-validate>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id_jabatan" id="id_jabatan">
                    <label for="nama_jabatan">Nama Jabatan* :</label>
                    <input type="text" id="nama_jabatan" class="form-control" name="nama_jabatan" required />
                    <div class="mt-3">
                        <label>
                            <input type="checkbox" class="js-switch" checked /> Checked
                        </label>
                    </div>
                    <select class="select2_group form-control">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(''); ?>