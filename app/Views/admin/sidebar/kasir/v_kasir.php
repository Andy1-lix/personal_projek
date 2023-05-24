<?= $this->extend('admin/layout/v_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Sistem Kasir</h1>
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>


            <div class="form-group">
                <div class="input-group mb-3">
                    <select name="id_produk" class="custom-select" id="Produk" required>
                        <?php foreach ($menu1 as  $product) : ?>
                            <option value="<?= $product['id_produk'] ?>"><?= $product['nama_produk'] ?></option>
                    </select>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" name="quantity" id="quantity" class="form-control" min="1" value="1">
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <?php foreach ($menu1 as $harga) : ?>
                    <input type="number" name="harga" id="harga" class="form-control" value="<?= $harga['harga'] ?>" readonly>
                <?php endforeach; ?>
            </div>
            <div class="form-group">
                <label for="stock">Stok</label>
                <?php foreach ($menu1 as $stock) : ?>
                    <input type="number" name="stock" id="stock" class="form-control" value="<?= $stock['stock'] ?>" readonly>
                <?php endforeach; ?>
            </div>
            <div class="form-group">
                    <label for="total">Total Harga</label>
                    <input type="number" name="total" id="total" class="form-control" value="total" readonly>
            </div>




            <form action="/kasir/checkout" method="post">
                <button type="submit" class="btn btn-primary">Checkout</button>
            </form>
        </div>
    </div>

</div>

<script>
    // Fungsi untuk mengupdate harga, stok, dan total saat memilih menu
    function updateProductInfo() {
        var selectedProduct = $('#id_produk').val();
        if (selectedProduct.length > 0) {
            var product = <?= json_encode($product) ?>;
            var selectedProductId = selectedProduct[0];
            var selectedProductObj = product.find(function(item) {
                return item.id_produk == selectedProductId;
            });

            $('#harga').val(selectedProductObj.harga);
            $('#stock').val(selectedProductObj.stock);
            updateTotal();
        } else {
            $('#harga').val('');
            $('#stock').val('');
            $('#total').val('');
        }
    }

    // Fungsi untuk mengupdate total harga saat mengubah jumlah produk
    function updateTotal() {
        var harga = parseFloat($('#harga').val());
        var quantity = parseInt($('#quantity').val());
        var total = harga * quantity;
        $('#total').val(total.toFixed(2));
    }

    // Panggil fungsi updateProductInfo saat memilih menu
    $('#id_produk').on('change', function() {
        updateProductInfo();
    });

    // Panggil fungsi updateTotal saat mengubah jumlah produk
    $('#quantity').on('change', function() {
        updateTotal();
    });

    // Panggil fungsi updateProductInfo saat halaman pertama kali dimuat
    $(document).ready(function() {
        updateProductInfo();
    });
</script>

<?= $this->endSection() ?>