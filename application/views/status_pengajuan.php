<!-- status_pengajuan.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pengajuan</title>
</head>

<body>
    <h1>Status Pengajuan</h1>
    <p><strong>Order ID:</strong> <?= $order_data['order_id']; ?></p>
    <p><strong>Status:</strong> <?= $order_data['order_status']; ?></p>

    <h2>Informasi Nasabah</h2>
    <p><strong>Nama Nasabah:</strong> <?= $nasabah_data['firstname'] . ' ' . $nasabah_data['lastname']; ?></p>
    <!-- Tambahkan informasi nasabah lainnya sesuai kebutuhan -->

    <h2>Informasi Produk</h2>
    <p><strong>Nama Produk:</strong> <?= $product_data['nm_product']; ?></p>
    <!-- Tambahkan informasi produk lainnya sesuai kebutuhan -->
</body>

</html>