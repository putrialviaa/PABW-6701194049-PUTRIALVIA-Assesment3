<?= $this->extend('layout/templateBaru'); ?>


<?= $this->section('content'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Form Input Pariwisata</h4>
                    </div>
                    <div class="content">
                        <form action="/wisata/update/<?= $wisata['id_wisata']; ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_wisata" id="id_wisata" value="<?= $wisata['id_wisata']; ?>">
                            <input type="hidden" name="gambarWisataLama" value="<?= $wisata['gambar_wisata']; ?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Pariwisata</label>
                                        <input id="nama_wisata" name="nama_wisata" for="nama_wisata" type="text" class="form-control" placeholder="Masukan Nama Pariwisata" required value="<?= $wisata['nama_wisata']; ?>" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Lokasi Pariwisata</label>
                                        <input id="lokasi_wisata" name="lokasi_wisata" for="lokasi_wisata" type="text" class="form-control" placeholder="Masukan Lokasi" required value="<?= $wisata['lokasi_wisata']; ?>" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Deskripsi </label>
                                        <textarea id="deskripsi_wisata" name="deskripsi_wisata" for="deskripsi_wisata" type="text" class="form-control" placeholder="Masukan Deskripsi Pariwisata" required value=""><?= $wisata['deskripsi_wisata']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Gambar Wisata</label>
                                        <input id="gambar_wisata" name="gambar_wisata" for="gambar_wisata" type="file" class="form-control" placeholder="Masukan Gambar wisata" value="<?= $wisata['gambar_wisata']; ?>">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-fill pull-right">Submit</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>