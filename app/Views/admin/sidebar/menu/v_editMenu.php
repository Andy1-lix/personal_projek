<?= $this->extend('admin/layout/v_template'); ?>

<?= $this->section('content') ?>
<div class="container">
    <h1 class="my-4"><?= $title ?></h1>
    <div class="row">
        <div class="col-md-6">
            <?php if (session()->getFlashdata('validation')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('validation')->listErrors() ?>
                </div>
            <?php endif; ?>
            <form action="/admin/menu1/<?= $product['id_produk'] ?>/update" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $product['nama_produk'] ?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $product['harga'] ?>">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" value="<?= $product['stock'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/admin/menu1" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
