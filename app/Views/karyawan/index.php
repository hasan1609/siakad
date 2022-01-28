<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Karyawan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
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
                            <div class="card-box table-responsive">
                                <a href="/karyawan/add" class="btn btn-round btn-primary btn-sm mb-3 ml-3"><i class="fa fa-plus"></i> Tambah Data</a>
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Tlp/Wa</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($karyawan as $row) : ?>
                                            <tr>
                                                <td>1</td>
                                                <td><?= $row['nama'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td><?= $row['tlp'] ?></td>
                                                <td>
                                                    <a href="" class="btn btn-round btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                    <!-- method http spofing -->
                                                    <form action="/jabatan/delete/" method="post" class="d-inline">
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
            </div>
        </div>>
    </div>
</div>


<?= $this->endSection(''); ?>