<?= $this->extend('admin/layout/v_template'); ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class=" mb-2 text-gray-800"><?= $judul ?></h5>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('/admin/menu/update/' . $menuData['id_produk']) ?>
                    <div class="form-group">
                        <?= form_label('Nama Produk', 'nama_produk') ?>
                        <?= form_input('nama_produk', $menuData['nama_produk'], ['class' => 'form-control']) ?>
                        <?= service('validation')->showError('nama_produk') ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Harga', 'harga') ?>
                        <?= form_input('harga', $menuData['harga'], ['class' => 'form-control']) ?>
                        <?= service('validation')->showError('harga') ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Gambar', 'gambar') ?>
                        <br>
                        <img src="<?= base_url('uploads/' . $menuData['gambar']) ?>" alt="Menu Gambar" width="200">
                        <br>
                        <?= form_upload('gambar', '', ['class' => 'form-control'],['type' => 'file']) ?>
                        <?= service('validation')->showError('gambar') ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Stock', 'stock') ?>
                        <?= form_input('stock', $menuData['stock'], ['class' => 'form-control']) ?>
                        <?= service('validation')->showError('stock') ?>
                    </div>
                    <?= form_submit('submit', 'Update', ['class' => 'btn btn-primary']) ?>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>