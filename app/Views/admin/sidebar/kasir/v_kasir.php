<?= $this->extend('admin/layout/v_template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                   <h3>Kasir</h3>
                </div>
                <div class="card-body">

                    <div class="mt-1">
                        <label for="makanan" class="form-label">Pilih Makanan</label>
                        <input list="makananList" class="form-control shadow p-3 mb-5 bg-body rounded" id="makanan" placeholder="Pilih Makanan">
                        <datalist id="makananList">
                            <option value="Nasi Goreng"></option>
                            <option value="Mie Ayam"></option>
                            <option value="Sate Ayam"></option>
                            <option value="Gado-gado"></option>
                            <option value="Bakso"></option>
                        </datalist>
                    </div>
                </div>
                <div class="col align-self-center w-25 mb-5 ">
                        <div class="col">
                        <label for="Total" class="form-label">Total</label>
                            <input type="text" class="form-control" placeholder="Total" aria-label="Last name">
                        </div>
                    </div>

                <div class="card-footer text-body-secondary ">
                    <button type="button" class="btn btn-primary ">Masukkan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>