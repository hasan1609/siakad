<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="tile_count col-md-12 col-sm-12">
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Guru</span>
                <div class="count">2500</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Total Siswa</span>
                <div class="count">123.50</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Pegawai</span>
                <div class="count">2,500</div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(''); ?>