<?= $this->extend('admin/layout/v_template'); ?>

<?= $this->section('content'); ?>
<!-- SELECT2 EXAMPLE -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Menu</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form action="/products/store" method="POST" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="nama_produk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_produk')) ? 'is-invalid' : '' ?>" id="nama_produk" name="nama_produk" value="<?= old('nama_produk') ?>">
                                <?php if ($validation->hasError('nama_produk')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_produk') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : '' ?>" id="harga" name="harga" value="<?= old('harga') ?>">
                                <?php if ($validation->hasError('harga')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('harga') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : '' ?>" id="gambar" name="gambar">
                                <?php if ($validation->hasError('gambar')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="id_kategori">Kategori</label>
                                <select name="id_kategori" class="form-control" id="kategori" required>
                                    <option value="">Pilih Kategori</option>
                                    <?php foreach ($kategori  as $k) : ?>
                                        <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="text" class="form-control <?= ($validation->hasError('stock')) ? 'is-invalid' : '' ?>" id="stock" name="stock" value="<?= old('stock') ?>">
                                <?php if ($validation->hasError('stock')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('stock') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /.card -->

<?= $this->endSection('content'); ?>