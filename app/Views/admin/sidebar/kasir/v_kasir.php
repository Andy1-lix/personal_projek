<?= $this->extend('admin/layout/v_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Sistem Kasir</h1>
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php foreach ($menu1 as $key => $product) : ?>
        <div class="input-group mb-3">
            <label for="id_produk" class="input-group-text">Produk</label>
            <select name="id_produk" class="form-select" id="Produk" required>
                <option value="<?= $product['id_produk'] ?>">
                    <?= $product['nama_produk'] ?>
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" name="quantity" id="quantity" class="form-control" min="1" value="1">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" id="harga" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="stock">Stok</label>
            <input type="text" id="stock" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="total">Total Harga</label>
            <input type="text" id="total" class="form-control" readonly>
        </div>

    <?php endforeach; ?>


    <form action="/kasir/checkout" method="post">
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
</div>

<script>
    // Fungsi untuk mengupdate harga, stok, dan total saat memilih menu
    function updateProductInfo() {
        var selectedProduct = $('#product_ids').val();
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
    $('#product_ids').on('change', function() {
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