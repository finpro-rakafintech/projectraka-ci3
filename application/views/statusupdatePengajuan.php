<main class="container mt-5 pb-5">

    <h1 style="text-align: center;">STATUS PENGAJUAN KPR</h1>

    <br><br><br><br>

    <?php
    $statusColor = '';
    switch ($order_data['order_status']) {
        case 'proses':
            $statusColor = 'bg-info';
            break;
        case 'diterima':
            $statusColor = 'bg-success';
            break;
        case 'ditolak':
            $statusColor = 'bg-danger';
            break;
        default:
            $statusColor = 'bg-secondary';
            break;
    }
    ?>
    <div class="p-3 mb-2 text-white <?= $statusColor; ?>">
        <strong>Status Pengajuan KPR Anda:</strong> <?= $order_data['order_status']; ?>
    </div>

    <br>

    <!-- Tambahkan button untuk merefresh halaman -->

    <br><br>

    <h2>Informasi Nasabah</h2>
    <p><strong>Nama Nasabah:</strong> <?= $nasabah_data['firstname'] . ' ' . $nasabah_data['lastname']; ?></p>
    <!-- Tambahkan informasi nasabah lainnya sesuai kebutuhan -->

    <h2>Informasi Produk</h2>
    <p><strong>ID Produk:</strong> <?= $product_data['product_id']; ?></p>
    <p><strong>Nama Produk:</strong> <?= $product_data['nm_product']; ?></p>
    <p><strong>Harga Produk:</strong> <?= $product_data['price']; ?></p>

    <h2>Detail Pengajuan</h2>
    <p><strong>Order ID:</strong> <?= $order_data['order_id']; ?></p>

    <!-- Tambahkan kotak warna berdasarkan order_status -->

    <p><strong>Jumlah Pinjaman:</strong> <?= $order_data['jumlah_pinjaman']; ?></p>
    <p><strong>Lama Pinjam:</strong> <?= $order_data['lama_pinjam']; ?></p>
    <p><strong>Suku Bunga (%):</strong> <?= $order_data['suku_bunga']; ?></p>
</main>