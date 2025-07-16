<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h3>Tambah Mahasiswa</h3>
<form action="/mahasiswa/store" method="post">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" required>
  </div>
  <div class="form-group">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" required>
      <option value="">-- Pilih --</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>
