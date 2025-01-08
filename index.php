<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pendaftaran Siswa Baru | SMK Coding</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Vinyl&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Rubik Vinyl', serif;
      font-style: normal;
      background: linear-gradient(100deg, #062037, #ffc8dd);
      padding: 0;
      margin: 0;
    }

    /* header {
      padding: 3rem;
      border-radius: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
    } */

    header h1 {
      font-size: 3rem;
      color: red;
    }

    header h3 {
      margin-bottom: 20px;
    }

    header h4 {
      margin-top: 20px;
      text-transform: uppercase;
      font-size: 1.2rem;
    }

    p {
      margin-top: 20px;
      padding: 15px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 5px;
      font-size: 1rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    p.success {
      border-left: 5px solid #4caf50;
      color: #4caf50;
    }

    @media (max-width: 576px) {
      header h1 {
        font-size: 2.5rem;
      }

      header h3, header h4 {
        font-size: 1rem;
      }

      header img {
        max-width: 100%;
      }
    }
    .navbar {
  padding: 1rem 0;
}
#carouselInner img {

  
  height: 300px; /* Atur tinggi gambar sesuai kebutuhan */
  width: auto; /* Pastikan lebar gambar proporsional */
  max-width: 100%; /* Batasi lebar maksimal gambar (misalnya 80% dari container) */
  margin: 0 auto; 
  object-fit: cover; /* Pastikan gambar tetap rapi tanpa distorsi */
}
  

  

 
  </style>
</head>
<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-center" aria-current="page" href="home.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--  akhir nav-->

<!-- slide.img -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="4000">
  <div class="carousel-indicators" id="carouselIndicators"></div>
  <div class="carousel-inner" id="carouselInner"></div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



    <!--  -->
<header class="about container text-white">
  <div class="row align-items-center">
    <!-- Kolom Teks -->
<section>
<div class="col text-center">
      <h1>
        SMA01 
        <span class="text-light ms-1 bg-success px-2 py-1 rounded">Pertanian</span>
      </h1>
      <h3>Pendaftaran Siswa Baru 2024-2025</h3>
      <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere, voluptatibus!</h4>
    </div>
</section>
    <!-- Kolom Gambar -->
    
    <div class="col  text-center">
      <img src="img/Premium_Vector___High_school_students_posing_waving_hands-removebg-preview.png" 
      alt="Tentang Kami" class="img-fluid rounded">
    </div>
  </div>
</header>



<?php 
if (isset($_GET['status'])): 
    $status = htmlspecialchars($_GET['status']);
?>
<!-- <p class="<?php echo $status == 'sukses' ? 'success' : 'error'; ?>"> -->
<?php
    if ($status == 'sukses') {
        echo "<div style='text-align: center; font-size: 20px;'>Pendaftaran siswa baru berhasil!</div>";
    } else {
        echo "<div style='text-align: center; font-size: 20px;'>Pendaftaran gagal!</div>";
    }
?>

<?php if ($status == 'sukses'): ?>
  <div class="text-center">
    <a href="list.php" class="btn btn-dark mt-3">Lihat</a>
    <?php endif; ?>
    <?php endif; ?>
  </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Array berisi URL gambar
  const images = [
    "https://i.pinimg.com/474x/bd/94/a5/bd94a513139fb1f64b59975edd3ae392.jpg",
    "https://i.pinimg.com/474x/c2/fe/22/c2fe22c2ebacb475339e961ffcb1f861.jpg",
    "https://i.pinimg.com/474x/62/7e/9b/627e9bfd6e0b4a99d0df52387e78c57f.jpg",
    "https://i.pinimg.com/474x/3b/e0/0b/3be00b2b6eb74cfb09c5c272ddb9bd65.jpg",
    "https://i.pinimg.com/474x/23/10/ff/2310ff4b16b4d1ecaa82ee5c8bdc28f0.jpg",
  ];

  const carouselInner = document.getElementById("carouselInner");
  const carouselIndicators = document.getElementById("carouselIndicators");

  images.forEach((image, index) => {
    // Tambahkan item carousel
    const carouselItem = document.createElement("div");
    carouselItem.className = `carousel-item ${index === 0 ? "active" : ""}`;
    carouselItem.innerHTML = `
      <img src="${image}" class="d-block w-100" alt="Slide ${index + 1}">
      <div class="carousel-caption d-none d-md-block">
        <h5> SMAO1 ${index + 1} PERTANIAN</h5>
        <p>AYO JOIN DI SMA KITA ${index + 1}.</p>
      </div>
    `;
    carouselInner.appendChild(carouselItem);

    // Tambahkan indikator
    const indicator = document.createElement("button");
    indicator.type = "button";
    indicator.dataset.bsTarget = "#carouselExampleDark";
    indicator.dataset.bsSlideTo = index;
    indicator.className = index === 0 ? "active" : "";
    indicator.ariaLabel = `Slide ${index + 1}`;
    if (index === 0) indicator.ariaCurrent = "true";
    carouselIndicators.appendChild(indicator);
  });
</script>
</body>
</html>
