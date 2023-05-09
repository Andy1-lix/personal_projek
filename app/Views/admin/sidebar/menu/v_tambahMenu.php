<?= $this->extend('admin/layout/v_template'); ?>

<?= $this->section('content'); ?>
<!-- SELECT2 EXAMPLE -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-success mb-15">
                    <div class="card-body text-black">
                        <?php 
                        session();
                        $errors = session()->getFlashdata('errors');
                        ?>
                        <?php echo form_open('/products/store') ?>
                        <!-- <form action="/products/store" method="POST" enctype="multipart/form-data"> -->
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
                        <!-- </form> -->
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.card -->

<?= $this->endSection('content'); ?>