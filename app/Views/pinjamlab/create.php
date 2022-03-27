<?= $this->extend('layout/dashboard'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-8">
      <h4 class="my-3">Form Tambah Data Lab Game dan Multimedia</h4>

      <form action="/pinjamlab/save" method="post">
        <?= csrf_field(); ?>
        <div class="row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ?
                                                      'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('nama'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="nim" class="col-sm-2 col-form-label">NIM</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('nim')) ?
                                                      'is-invalid' : ''; ?>" id="nim" name="nim" autofocus value="<?= old('nim'); ?>">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('nim'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="tanggal_peminjaman" class="col-sm-2 col-form-label">tanggal_peminjaman</label>
          <div class="col-sm-10">
            <input type="date" class="form-control <?= ($validation->hasError('tanggal_peminjaman')) ?
                                                      'is-invalid' : ''; ?>" id="tanggal_peminjaman" name="tanggal_peminjaman" autofocus value="<?= old('tanggal_peminjaman'); ?>">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('tanggal_peminjaman'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="tanggal_pengembalian" class="col-sm-2 col-form-label">tanggal_pengembalian</label>
          <div class="col-sm-10">
            <input type="date" class="form-control <?= ($validation->hasError('tanggal_pengembalian')) ?
                                                      'is-invalid' : ''; ?>" id="tanggal_pengembalian" name="tanggal_pengembalian" autofocus value="<?= old('tanggal_pengembalian'); ?>">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('tanggal_pengembalian'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="nama_lab" class="col-sm-2 col-form-label">nama_lab</label>
          <div class="col-sm-10">
            <select id="nama_lab" name="nama_lab" class="" <?= ($validation->hasError('nama_lab')) ?
                                                      'is-invalid' : ''; ?>" id="nama_lab" name="nama_lab" value="<?= old('nama_lab'); ?>">>
              <option value="Ada">Algostruk</option>
              <option value="Tidak Ada">Gamed</option>
            </select>
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('nama_lab'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="keperluan" class="col-sm-2 col-form-label">keperluan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('keperluan')) ?
                                                      'is-invalid' : ''; ?>" id="keperluan" name="keperluan" autofocus value="<?= old('keperluan'); ?>">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('keperluan'); ?>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>