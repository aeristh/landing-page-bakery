<?php
include 'config.php';

$query_kategori = mysqli_query($conn, "SELECT kategori.*, COUNT(produk.id_produk) AS total FROM kategori LEFT JOIN produk ON kategori.id_kategori = produk.id_kategori GROUP BY kategori.id_kategori");

$id_kategori = isset($_GET['kategori']) ? $_GET['kategori'] : '';

if ($id_kategori) {
  $query_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_kategori = '$id_kategori'");
} else {
  $query_produk = mysqli_query($conn, "SELECT * FROM produk");
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>
  <link rel="stylesheet" href="style.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="80">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img
          src="img/lg.jpg"
          alt="Logo"
          width="30"
          class="d-inline-block align-text-top rounded-circle" />
        Sweet Bites
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end of navbar -->

  <!-- banner -->
  <section id="home">
    <div class="container-fluid banner">
      <div class="container banner-content col-lg-6">
        <div class="text-center">
          <p class="fs-1">Selamat Datang di Sweet Bites</p>
          <p class="d-none d-sm-block">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla
            aperiam perspiciatis distinctio saepe corrupti officiis eum quisquam
            dignissimos eius consequuntur?
          </p>
        </div>
      </div>
  </section>
  </div>
  <!-- end of banner -->

  <!-- accordion -->
  <section id="about">
    <div class="my-5 container col-10 col-sm-9 col-md-8 col-lg-6">
      <h2 class="text-center mb-5">Kenapa Harus Belanja di Sweet Bites</h2>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne">
              Bahan Baku Premium
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse show"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Kami hanya menggunakan bahan-bahan pilihan berkualitas tinggi untuk memastikan setiap gigitan memberikan rasa yang autentik dan mewah.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo">
              Tanpa Bahan Pengawet
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Semua produk Sweet Bites dibuat secara freshly baked setiap hari tanpa tambahan pengawet kimia.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThree"
              aria-expanded="false"
              aria-controls="collapseThree">
              Kemasan Estetik & Aman
            </button>
          </h2>
          <div
            id="collapseThree"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Cocok untuk hampers! Kemasan kami dirancang khusus agar produk tetap aman selama pengiriman.
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>
  <!-- end of accordion -->

  <!-- carousel -->
  <div class="container-fluid carousel-content py-5">
    <div class="container">
      <h2 class="text-center mb-5">Produk Terbaik Kami</h2>
      <div
        id="carouselExampleCaptions"
        class="carousel slide col-lg-8 offset-lg-2">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/pt1.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/pt2.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>
                Some representative placeholder content for the second slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/pt3.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
                Some representative placeholder content for the third slide.
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <!-- end of carousel -->

  <!-- card -->
  <section id="products">
    <div class="container-fluid py-5">
      <div class="container">
        <h2 class="text-center mb-5">Produk Kami</h2>

        <div class="col-12">
          <div class="row">
            <!-- list group -->
            <div class="col-lg-3 col-md-4 mb-3">
              <div class="list-group list-group-flush shadow-sm rounded-4 overflow-hidden border">
                <?php
                $query_kategori = mysqli_query($conn, "SELECT kategori.*, COUNT(produk.id_produk) AS total 
                                           FROM kategori 
                                           LEFT JOIN produk ON kategori.id_kategori = produk.id_kategori 
                                           GROUP BY kategori.id_kategori");

                while ($row = mysqli_fetch_assoc($query_kategori)) :
                  $active_class = "";
                  $badge_class = "bg-dark";

                  if (isset($_GET['kategori']) && $_GET['kategori'] == $row['id_kategori']) {
                    $active_class = "active bg-dark border-dark";
                    $badge_class = "bg-light text-dark";
                  }
                ?>
                  <a href="index.php?kategori=<?= $row['id_kategori']; ?>"
                    class="list-group-item list-group-item-action py-3 fw-semibold d-flex justify-content-between align-items-center <?= $active_class; ?>">
                    <?= $row['nama_kategori']; ?>
                    <span class="badge rounded-pill <?= $badge_class; ?>">
                      <?= $row['total']; ?>
                    </span>
                  </a>
                <?php endwhile; ?>
              </div>
            </div>
            <!-- end of list group -->

            <div class="col-lg-9 col-md-8">
              <div class="row">
                <?php while ($item = mysqli_fetch_assoc($query_produk)) : ?>
                  <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm custom-card">
                      <img
                        src="img/<?= $item['gambar']; ?>"
                        class="card-img-top p-2 rounded-4"
                        alt="<?= $item['nama_produk']; ?>" />
                      <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold"><?= $item['nama_produk']; ?></h5>
                        <p class="card-text text-muted small">
                          <?= $item['deskripsi']; ?>
                        </p>
                        <div class="mt-auto">
                          <a href="detail.php?id=<?= $item['id_produk']; ?>" class="btn btn-dark w-100 rounded-pill">
                            Lihat Detail
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of card -->

  <!-- footer -->
  <section id="contact">
    <footer class="bg-dark text-white py-5 mt-5">
      <div class="container">
        <div class="row align-items-center">
          <!-- copyright -->
          <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
            <h5 class="fw-bold">Sweet Bites Patisserie</h5>
            <p class="text-secondary mb-0">&copy; 2026 All Rights Reserved.</p>
          </div>

          <div class="col-md-6 text-center text-md-end">
            <p class="mb-3 d-none d-md-block text-secondary">Follow Us</p>
            <div
              class="d-flex justify-content-center justify-content-md-end gap-3">
              <!-- instagram -->
              <a href="#" class="social-icon si-instagram">
                <i class="bi bi-instagram"></i>
              </a>
              <!-- whatsapp -->
              <a href="#" class="social-icon si-whatsapp">
                <i class="bi bi-whatsapp"></i>
              </a>
              <!-- tiktok -->
              <a href="#" class="social-icon si-tiktok">
                <i class="bi bi-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!-- end of footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>