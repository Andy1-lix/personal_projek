<?= $this->extend('admin/layout/v_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Sistem Kasir</h1>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menu1 as $key => $product) : ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $product['nama_produk'] ?></td>
                    <td><?= $product['harga'] ?></td>
                    <td><?= $product['stock'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form action="/kasir/checkout" method="post">
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
</div>

<?= $this->endSection() ?>