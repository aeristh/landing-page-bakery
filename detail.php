<?php
include 'config.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id == '') {
    header("Location: index.php");
    exit;
}

$query = mysqli_query($conn, "SELECT produk.*, kategori.nama_kategori 
                              FROM produk 
                              JOIN kategori ON produk.id_kategori = kategori.id_kategori 
                              WHERE id_produk = '$id'");

$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Produk tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['nama_produk']; ?> - Sweet Bytes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-img {
            max-height: 500px;
            object-fit: cover;
            width: 100%;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container py-5">
        <!-- tombol kembali -->
        <div class="mb-4">
            <a href="index.php" class="btn btn-outline-dark rounded-pill">
                ← Kembali ke Katalog
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="row g-0">
                        <!-- gambar -->
                        <div class="col-md-6">
                            <img src="img/<?= $data['gambar']; ?>" class="product-img" alt="<?= $data['nama_produk']; ?>">
                        </div>

                        <!-- teks -->
                        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                            <span class="badge bg-secondary mb-3 w-fit-content align-self-start">
                                <?= $data['nama_kategori']; ?>
                            </span>

                            <h1 class="fw-bold display-5 mb-3"><?= $data['nama_produk']; ?></h1>

                            <h5 class="text-muted mb-4">Description:</h5>
                            <p class="lead text-secondary mb-5">
                                <?= $data['deskripsi']; ?>
                            </p>

                            <div class="mt-auto">
                                <button class="btn btn-dark btn-lg w-100 rounded-pill py-3">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>