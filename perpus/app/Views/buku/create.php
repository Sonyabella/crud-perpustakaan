<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Tambah Buku</strong></h3>
    </div>
    <div class="card-body">
        <form action="/buku/simpanan" method="post">
            <div class="form-group">
                <label for="judul" style="color: #007bff;">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="penulis" style="color: #007bff;">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="penerbit" style="color: #007bff;">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tahun_terbit" style="color: #007bff;">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
