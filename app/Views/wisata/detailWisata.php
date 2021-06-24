<?= $this->extend('layout/templateBaru'); ?>


<?= $this->section('content'); ?>

<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col">
      <div class="card mb-3" style="max-width: 2000px;">
        <div class="row g-0">
          <div class="col-md-4" style="margin-top: 10px; margin-bottom: 10px;">
            <img style="width: 380px;" src="/img/<?= $wisata['gambar_wisata']; ?>" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body" style="margin-bottom: 10px; ">
              <h3 class="card-title"> <?= $wisata['nama_wisata']; ?></h3>
              <p class="card-text" style="text-align: justify; margin-right: 8px;"><?= $wisata['deskripsi_wisata']; ?></p>
              <p class="card-text" style="text-align: justify; margin-right: 8px;">Lokasi: <?= $wisata['lokasi_wisata']; ?></p>
              <a href="/wisata/edit/<?= $wisata['id_wisata']; ?>" class="btn btn-warning btn-fill ">Update</a>

              <form action="/wisata/<?= $wisata['id_wisata']; ?>" method="POST" style="display: inline;">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger btn-fill" onclick="return confirm('apakah anda yakin?');">Delete</button>
              </form>

              <a href="/wisata" class="btn">kembali ke daftar Wisata </a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>