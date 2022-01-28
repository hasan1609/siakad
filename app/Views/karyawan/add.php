<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12">
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
                    <form class="form-horizontal" data-parsley-validate action="<?= base_url('karyawan/create') ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for=""><strong>Masukkan Nama Lengkap</strong></label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" id="nama" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Masukkan Username</strong></label>
                                        <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Masukkan Email</strong></label>
                                        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Masukan Password</strong></label>
                                        <input type="text" class="form-control" placeholder="Password" id="password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Masukkan Tempat Lahir</strong></label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempat" name="tempat">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Pilih Tanggal Lahir</strong></label>
                                        <input type="date" class="form-control" placeholder="Pilih Tgl. Lahir" id="ttl" name="ttl">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Masukkan No Tlp/Hp/Wa</strong></label>
                                        <input type="number" class="form-control" placeholder="NoTlp/Hp/WA" id="tlp" name="tlp">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Alamat</strong></label>
                                        <textarea class="resizable_textarea form-control" id="alamat" name="alamat" placeholder="Masukkan alamat lengkap sesuai KTP"></textarea>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for=""><strong>Pilih Jabatan</strong></label>
                                        <select class="select2_single form-control" tabindex="-1" id="jabatan" name="jabatan">
                                            <option hidden></option>
                                            <?php foreach ($jabatan as $row) : ?>
                                                <option value="<?= $row['id_jabatan'] ?>"><?= $row['nama_jabatan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Pilih Agama</strong></label>
                                        <select class="select2_single form-control" tabindex="-1" id="agama" name="agama">
                                            <option hidden></option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="protestan">Protestan</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Pilih Pendidikan Terakhir</strong></label>
                                        <select class="select2_single form-control" tabindex="-1" id="pendidikan" name="pendidikan">
                                            <option hidden></option>
                                            <option value="sd">SD</option>
                                            <option value="smp">SMP</option>
                                            <option value="sma">SMA</option>
                                            <option value="sarjana">Sarjana</option>
                                            <option value="magister">Magister</option>
                                            <option value="doctor">Doctor</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Pilih Tanggal Masuk</strong></label>
                                        <input type="date" class="form-control" placeholder="Pilih Tgl. Masuk" id="tgl_masuk" name="tgl_masuk">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Jenis Kelamin</strong></label>
                                        <p>
                                            Laki-Laki <input type="radio" class="flat" name="jk" id="jk" value="lk" checked="" required /> Perempuan
                                            <input type="radio" class="flat" name="jk" id="jk" value="pr" />
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Foto</strong></label><br>
                                        <img id="preview" src="#" style="width: 150px; margin-bottom: 10px;" alt="Gambar Anda">
                                        <input type="file" class="form-control" id="foto" name="foto">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-warning">Kosongkan</button>
                            <a href="" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>>
    </div>
</div>

<?= $this->endSection(''); ?>