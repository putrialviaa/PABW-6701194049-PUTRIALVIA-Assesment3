<?= $this->extend('layout/templateBaru'); ?>


<?= $this->section('content'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Daftar Pariwisata</h4>
                        <p class="category">Menampilkan semua data Pariwisata</p>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama Pariwisata</th>
                                <th>Lokasi Pariwisata</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($wisata as $w) : ?>
                                    <tr>
                                        <th><?= $i++; ?></th>
                                        <td><?= $w['nama_wisata']; ?></td>
                                        <td><?= $w['lokasi_wisata']; ?></td>
                                        <td><img src="/img/<?= $w['gambar_wisata']; ?>" alt="" class="gambar"></td>
                                        <td><a href="/wisata/<?= $w['id_wisata']; ?>" class="btn">Detail</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-info btn-fill pull-right" style="margin-top: 10px;" href="/Wisata/create">Tambah Data Wisata</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>