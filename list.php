<?php include("config.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>list-peserta.sma01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,400;0,700;1,100;1,400&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
<style>
  .nav-link{
    font-family: fantasy;
    color: #000;
  }
  .nav-link:hover {
color: red;
font-family: cursive;
  }
  table {
                width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
        }
        table th, table td {
            border: 1px solid #0E2C5F;
            padding: 8px;
            text-align: center;
        }
        table th {
            background-color: red;
            color: white;
        }
        p {
            text-align: center;
            font-size: 18px;
        }
  :root {
  --pink: #f14e95;
  --bg: #0a0a0a;
  --shadow: 0 2px 2px rgb(0 0 0 / 0.5);
}

.hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url(https://i.pinimg.com/474x/d9/cf/ef/d9cfeffda2408aad33260912de3af862.jpg);
  background-size: cover;
  background-position: center;
  z-index: -1;
  /* filter: grayscale(); */
}
.hero {
  position: relative;
  min-height: 100vh;
}
.hero h1,
.hero h4,
.hero p {
  text-shadow: var(--shadow);
  color: black;
}
.hero h1 {
  font-family: 'Sacramento', cursive;
  font-size: 6rem;
}
.hero h4 {
  font-size: 1.6rem;
}
.hero p {
  font-size: 1.4rem;
}
.hero a {
  color: var(--pink);
  background-color: white;
  box-shadow: var(--shadow);
}
.hero a:hover {
  background-color: pink;
  color: white;
}
.mynavbar {
  background-color: rgba(255, 255, 255, 0.3) !important;
  backdrop-filter: blur(4px);
}

.mynavbar .offcanvas {
  height: 100vh;
}
.mynavbar .navbar-brand,
.mynavbar .offcanvas-title {
  font-family: 'Sacramento', cursive;
  font-size: 3.2rem;
  font-weight: bold;
}
.mynavbar .nav-link {
  text-transform: uppercase;
}
.home {
  background-image: url(https://i.pinimg.com/474x/59/5d/d1/595dd13bafac3072d844e91b0078cb05.jpg);
  background-size: cover;
  min-height: 100vh;
  margin-top: -6rem;
  padding-top: 15rem;
  padding-bottom: 5rem;
}
.home h2,
.info h2,
.story h2,
.gallery h2,
.rsvp h2,
.gifts h2 {
  color: var(--pink);
  font-family: 'Sacramento';
  font-size: 5rem;
  font-weight: bold;
}
.home h3 {
  color: #444;
  font-size: 1.5rem;
  margin-bottom: 1rem;
}
.home p {
  font-size: 1.1rem;
  color: #666;
}
.home .couple {
  margin-top: 100px;
}
.home .couple h3 {
  font-family: 'Sacramento';
  font-size: 2.4rem;
  color: var(--pink);
}
.home .couple img {
  width: 100%;
}
.home .heart {
  width: 50px;
  height: 50px;
  background-color: white;
  display: flex;
  border-radius: 50%;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
  position: absolute;
  left: 50%;
  transform: translateX(-50%) translateY(65px);
}
.home .heart i {
  margin: auto;
  color: var(--pink);
}
</style>
<!-- 1 -->
  </head>
  <body >
  <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
      <main>
        <h4>Kepada <span>kepasa Saudara/i, </span></h4>
        <h1>SELAMAT DATANG </h1>
        <p>Telah Terdaftar di SMA01 </p>
        <div class="simply-countdown"></div>
        <a href="#home" class="btn btn-lg mt-4" onClick="enableScroll()">lihat </a>
      </main>
    </section>
    <!-- 2 -->
    <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
      <div class="container">
        <a class="navbar-brand" href="#">SMA01</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SMA01</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="home.php">Home</a>
              <a class="nav-link" href="about.php">ABOUT</a>
              <a class="nav-link" href="pendaftaran.php">PENDAFTARAN</a>
              <a class="nav-link" href="list.php">lIST</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- 3-->
    <section id="home" class="home">
      
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2>CONGRATULATIONS</h2>
            <h3>Diselenggarakan pada 20 November 2023 di Bandung, Jawa Barat.</h3>
            <p>Oleh karena itu, d engan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i, untuk hadir pada acara pernikahan kami.</p>
          </div>
        </div>
        <div class="row couple">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-8 text-end">
                <h3>Sandhika Galih</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque praesentium aut ipsa perferendis, incidunt soluta?</p>
                <p>
                  Putra dari Bpk. Lorem <br />
                  dan <br />
                  Ibu Ipsum
                </p>
              </div>
              <div class="col-4">
                <img src="https://i.pinimg.com/474x/f9/c9/4a/f9c94aa26decf1ebe846416a7b36b8b4.jpg" alt="Sandhika Galih" class="img-responsive rounded-circle" />
              </div>
            </div>
          </div>
          <!-- <span class="heart"><i class="bi bi-heart-fill"></i></span> -->
          <div class="col-lg-6">
            <div class="row">
              <div class="col-4">
                <img src="https://i.pinimg.com/474x/b5/af/bc/b5afbcbf9406d2e0e33d438e688a7fdc.jpg" alt="Nofariza" class="img-responsive rounded-circle" />
              </div>
              <div class="col-8">
                <h3>Nofariza</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque praesentium aut ipsa perferendis, incidunt soluta?</p>
                <p>
                  Putra dari Bpk. Ipsum <br />
                  dan <br />
                  Ibu Lorem
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- tabel -->
<script>
        function confirmDelete(id) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                // Jika pengguna menekan "OK", arahkan ke hapus.php
                window.location.href = "hapus.php?id=" + id;
            }
            // Jika pengguna menekan "Batal", tidak ada tindakan
        }
    </script>

<br>
    <table>
    <h1 class="text-center">Daftar Peserta</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alumni</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM dtb_sma01mandau";
            $query = mysqli_query($db, $sql);
            $no = 1;

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['asal'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                echo "<td>" . $siswa['agama'] . "</td>";
                echo "<td>" . $siswa['alumni'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $siswa['id'] . "'>Edit</a> | ";
                echo "<a href='#' onclick='confirmDelete(" . $siswa['id'] . ")'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
        <p>Total: <?php echo mysqli_num_rows($query); ?></p>
        <!-- tabel and -->

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
       <script>
      const rootElement = document.querySelector(':root');
      const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
      const audioIcon = document.querySelector('.audio-icon-wrapper i');
      const song = document.querySelector('#song');
      let isPlaying = false;

      function disableScroll() {
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

        window.onscroll = function () {
          window.scrollTo(scrollTop, scrollLeft);
        };

        rootElement.style.scrollBehavior = 'auto';
      }

      function enableScroll() {
        window.onscroll = function () {};
        rootElement.style.scrollBehavior = 'smooth';
        // localStorage.setItem('opened', 'true');
        playAudio();
      }

      // function playAudio() {
      //   song.volume = 0.1;
      //   audioIconWrapper.style.display = 'flex';
      //   song.play();
      //   isPlaying = true;
      // }

      // audioIconWrapper.onclick = function () {
      //   if (isPlaying) {
      //     song.pause();
      //     audioIcon.classList.remove('bi-disc');
      //     audioIcon.classList.add('bi-pause-circle');
      //   } else {
      //     song.play();
      //     audioIcon.classList.add('bi-disc');
      //     audioIcon.classList.remove('bi-pause-circle');
      //   }

      //   isPlaying = !isPlaying;
      // };

      // if (!localStorage.getItem('opened')) {
      //   disableScroll();
      // }
      disableScroll();
    </script>
      
    
  </body>
</html>
