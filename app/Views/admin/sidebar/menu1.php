<?= $this->extend('admin/layout/v_template'); ?>

<?= $this->section('content'); ?>
<!-- /.row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Menu</h3>

                <div class="card-tools">

          
                    <a href="<?= base_url('products/create') ?>" class="btn btn-flat btn-primary btn-xm">
                        <i class="fas fa-plus"></i> Tambah
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive h-auto d-inline-block " style=" text-align:center;">
                <table class="table table-head-fixed text-nowrap table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Stok</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($menu1 as $menu) : ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $menu['nama_produk'] ?></td>
                                <td>Rp<?= $menu['harga'] ?></td>
                                <td><?= $menu['gambar'] ?></td>
                                <td><?= $menu['stock'] ?></td>
                                <td>
                                    <form action="/products/delete/<?= $menu['id_produk'] ?>" method="POST">
                                        <a href="/admin/menu/edit/<?= $menu['id_produk'] ?>" class="btn btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row -->
<?= $this->endSection('content'); ?>