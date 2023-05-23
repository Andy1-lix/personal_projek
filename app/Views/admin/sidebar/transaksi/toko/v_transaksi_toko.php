<?= $this->extend('admin/layout/v_template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Data transaksi</h3>
                    </div>
                </div>
                <div class="card-body ">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Toko</th>
                                <th>Kirim</th>
                                <th>Kembali</th>
                                <th>Create at</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?= $i = 1 ; ?>
                                <td><?= $i++ ?></td>
                                <td>Nama Toko</td>
                                <td>Kirim</td>
                                <td>Kembali</td>
                                <td>Create at</td>
                                <td>Total</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>