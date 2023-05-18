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
                                <th>Nama Pembeli</th>
                                <th>Pesanan/Pembelian</th>
                                <th>Total</th>
                                <th>Create at</th>
                                <th>Kasir</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                                <th>CSS grade</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>