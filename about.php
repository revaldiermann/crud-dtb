<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,400;0,700;1,100;1,400&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
<script src="https://unpkg.com/feather-icons"></script>

<style>
  :root {
  --primary: #66825b;
  --bg: #010101;
}
* {
  margin: 0;

  padding: 0;

  box-sizing: border-box;

  outline: none;

  border: none;

  text-decoration: none;
}
body {
  font-family: 'Rowdies''roboto', sans-serif;
  background-color: var(--bg);
  color: #fff;
}
  .hero {
  min-height: 100vh;
  display: flex;
  align-items: center;
  background-image: url('https://i.pinimg.com/474x/bc/de/ad/bcdead06994ee41049ada7254028709f.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
}
.hero .content {
  padding: 1.4rem 7%;
  max-width: 60rem;
}
.hero .content h1 {
  font-size: 5rem;
  color: #fff;
  text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
  line-height: 1, 2;
}
.hero .content span {
  color:green;
}
.hero .content p {
  font-size: 1.6rem;
  margin-top: 1rem;
  line-height: 1.4;
  font-weight: 100;
  text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
  mix-blend-mode: difference;
}
.hero .content .cta {
  margin-top: 1rem;
  display: inline-block;
  padding: 1rem 3rem;
  font-size: 1.4rem;
  color: #fff;
  background-color: var(--primary);
  border-radius: 0.5rem;
  box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
}

/* about sections */
.about,
.contact {
  padding: 8rem 7% 1.4rem;
}

.about h2,
.contact h2 {
  text-align: center;
  font-size: 2.6rem;
  margin-bottom: 3rem;
}

.about h2 span,
.contact h2 span {
  color: var(--primary);
}

.about .row {
  display: flex;
}

.about .row .about-img img {
  flex: 1 1 45rem;
}

.about .row .about-img {
  width: 100%;
}

.about .row .content {
  padding: 0 1rem;
}

.about .row .content h3 {
  font-size: 1.8rem;
  margin-bottom: 1rem;
}

.about .row .content p {
  margin-bottom: 0.8rem;
  font-size: 1.4rem;
  font-weight: 100;
  line-height: 1.6;
}


.contact h2 {
  margin-bottom: 1rem;
}
.contact p {
  text-align: center;
  max-width: 30rem;
  margin: auto;
  font-weight: 100;
  line-height: 1.6;
  font-size: 1.3rem;
}
/* contact sections */
.contact .row {
  display: flex;
  margin-top: 2rem;
  background-color: #222;
}

.contact .row .map {
  flex: 1 1 45rem;
  width: 100%;
  object-fit: cover;
}

.contact .row form {
  flex: 1 1 45rem;
  padding: 5rem 2rem;
  text-align: center;
}

.contact .row form .input-group {
  display: flex;
  align-items: center;
  margin-top: 2rem;
  background-color: var(--bg);
  border: 1px solid #eee;
  padding-left: 2rem;
}

.contact .row form .input-group input {
  width: 100%;
  padding: 2rem;
  font-size: 1.7rem;
  background: none;
  color: #fff;
}

.contact .row form .btn {
  margin-top: 3rem;
  display: inline-block;
  padding: 1rem 3rem;
  font-size: 1.7rem;
  color: #fff;
  background-color: var(--primary);
  cursor: pointer;
}
/* xxxxxxx */
   .nav-link{
    font-family: fantasy;
    color: #fff;
  }
  .nav-link:hover {
color: red;
font-family: cursive;
  }
  .navbar {
    padding: 1.4rem 7%;
    position: fixed;
    background-color: rgba(1, 1, 1, 0.8);
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
  }
  #projects {
            background-color: #e2edff;
          }
          section {
            padding-top: 5rem;
          }
          /* My Keyboard Section */
          .keyboard-box {
            position: relative;
            background-color: #0c6efd;
            border-radius: 10px;
            height: 500px;
            transform-style: preserve-3d;
          }
          .keyboard-box::before {
            content: "MY";
            position: absolute;
            color: #fff;
            font-size: 6em;
            font-weight: bold;
            font-style: italic;
            top: 30px;
            left: 50%;
            transform: translate(-50%, 0);
            opacity: 0;
            transition: 0.5s;
          }
          .keyboard-box:hover::before {
            opacity: 0.2;
          }
          .keyboard-box::after {
            content: "KEYBOARD";
            position: absolute;
            color: #fff;
            font-size: 4.3em;
            font-weight: bold;
            font-style: italic;
            top: 350px;
            left: 50%;
            transform: translate(-50%, 0);
            opacity: 0;
            transition: 0.5s;
          }
          .keyboard-box:hover::after {
            opacity: 0.2;
          }
          .keyboard-name {
            position: absolute;
            top: 0;
            width: 100%;
            color: #fff;
            text-align: center;
            font-size: 2em;
            opacity: 0;
            transform: translate3d(0, 0, 50px);
            transition: 0.5s;
          }
          .keyboard-box:hover .keyboard-name {
            top: 20px;
            opacity: 1;
          }
          .keyboard-detail-button {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translate3d(-50%, 0, 100px);
            opacity: 0;
            transition: 0.5s;
            z-index: 3;
          }
.keyboard-box:hover .keyboard-detail-button {
  opacity: 1;
  bottom: 20px;
}
.keyboard-img {
  position: absolute;
  top: 52%;
  left: 50%;
  transform: translate3d(-50%, -52%, 80px);
  max-width: 350px;
  transition: 0.5s;
  z-index: 2;
}
.keyboard-box:hover .keyboard-img {
  transform: translate3d(-50%, -52%, 100px) rotate(5deg) scale(1.2);
}
</style>
  </head>



  <body >
  <nav class="navbar navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand text-white" href="#">SMA01MANDAU</a>
    <button class="navbar-toggler"
     type="button" 
     data-bs-toggle="collapse"
      data-bs-target="#navbarNavAltMarkup" 
      aria-controls="navbarNavAltMarkup" 
      aria-expanded="false" 
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" aria-current="page" href="home.php">HOME</a>
        <a class="nav-link" href="about.php">ABOUT</a>
        <a class="nav-link" href="pendaftaran.php">PENDAFTARAN</a>
        <a class="nav-link" href="list.php">LIST</a>
        </div>
      </div>
    </div>
  </nav>
  <!--  -->
  <section class="hero" id="Home">
      <main class="content">
        <h1>mari nikmati bersekolah di <span>SMA01</span></h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, dignissimos?</p>
        <a href="pendaftaran.php" class="cta">DAFTAR SEKARANG</a>
      </main>
    </section>
    <!-- Hero section end -->

    <!-- about sections star -->
    <section id="about" class="about py-5">
  <div class="container">
    <h2 class="text-center mb-4"><span>Tentang</span> Kami</h2>
    <div class="row align-items-center">
      <!-- Kolom Gambar -->
      <div class="col-md-6">
        <img src="https://i.pinimg.com/474x/1e/15/28/1e1528186ebf9b2d988a4d8c52467bd7.jpg" alt="Tentang Kami" class="img-fluid rounded">
      </div>
      <!-- Kolom Konten -->
      <div class="col-md-6">
        <h3>Kenapa Memilih SMAO1 Pertanian Kami</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam cumque excepturi voluptas suscipit, dolore molestiae?</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius aperiam illum consectetur dolorum iusto, numquam unde dicta earum quia reiciendis?</p>
      </div>
    </div>
  </div>
</section>

    <!-- about sections end -->
      <section id="projects">
<div class="container">
  <div class="row text-center mb-3">
    <div class="col text-dark">
      <h2>DILENGKAPI</h2>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-4 mb-3" data-aos="flip-right">
      <div class="card">
        <img
        src="https://i.pinimg.com/474x/e3/69/d5/e369d52e57f7c5060e7a5e346165a735.jpg"
        class="card-img-top"
        alt="Project 1"
        />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up
            the bulk of the card's content.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3" data-aos="flip-right" data-aos-delay="500">
      <div class="card">
        <img
        src="https://i.pinimg.com/474x/14/49/82/14498266d94a6d9f69185e732888e642.jpg"
        alt="Project 2"
        />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up
            the bulk of the card's content.
          </p>
        </div>
      </div>
    </div>
    <div
    class="col-md-4 mb-3"
    data-aos="flip-right"
    data-aos-delay="1000"
    >
    <div class="card">
      <img
      src="https://i.pinimg.com/474x/f6/4d/c6/f64dc67e7e0a5114d466cee613ed4d45.jpg"
      class="card-img-top"
      alt="Project 3"
      />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up
          the bulk of the card's content.
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-4 mb-3" data-aos="flip-right" data-aos-delay="500">
    <div class="card">
      <img
      src="https://i.pinimg.com/474x/26/b1/f6/26b1f60a1bc382523505d904916fd55f.jpg"
      class="card-img-top"
      alt="Project 4"
      />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up
          the bulk of the card's content.
        </p>
      </div>
    </div>
  </div>
  <div
  class="col-md-4 mb-3"
  data-aos="flip-right"
  data-aos-delay="1000"
  >
  <div class="card">
    <img
    src="https://i.pinimg.com/474x/40/4c/2e/404c2eea800395678db014fc3e6d89fb.jpg"
    class="card-img-top"
    alt="Project 5"/>
    <div class="card-body">
      <p class="card-text">
        Some quick example text to build on the card title and make up
        the bulk of the card's content.
      </p>
    </div>
  </div>
</div>
</div>
</div>
<!--  -->
<section id="my-keyboards">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>PRESTASI INTERNASIONAL</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="keyboard-box">
          <h4 class="keyboard-name">PIDATO</h4>
          <img
          src="https://i.pinimg.com/736x/50/f7/2f/50f72f1c5f7dca4184a40a42eea591b2.jpg"
          alt="Keychron K3"
          class="keyboard-img"
          />
          <a href="#" class="btn btn-light keyboard-detail-button"
          >Show Details</a
          >
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="keyboard-box">
          <h4 class="keyboard-name">PROGRAMER</h4>
          <img
          src="https://i.pinimg.com/474x/db/2d/8c/db2d8cade6fb591a759604dacb53c01c.jpg"
          alt="Womier RGB"
          class="keyboard-img"
          />
          <a href="#" class="btn btn-light keyboard-detail-button"
          >Show Details</a
          >
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="keyboard-box">
          <h4 class="keyboard-name">WEB-DEV</h4>
          <img
          src="https://i.pinimg.com/474x/6e/e2/1d/6ee21d322f63e5765cf581182df913a5.jpg"
          alt="Red Dragon"
          class="keyboard-img"
          />
          <a href="#" class="btn btn-light keyboard-detail-button"
          >Show Details</a
          >
        </div>
      </div>
    </div>
  </div>
</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path
  fill="#ffffff"
  fill-opacity="10"
  d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,181.3C420,181,480,235,540,261.3C600,288,660,288,720,272C780,256,840,224,900,218.7C960,213,1020,235,1080,245.3C1140,256,1200,256,1260,250.7C1320,245,1380,235,1410,229.3L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
  ></path>
</svg>
    </section>
    <!-- contact section star -->
    <section id="contact" class="contact">
      <h2><span> kontak</span> kami</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, nesciunt.</p>
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127669.05293201095!2d101.44117599999997!3d0.513791200000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab80690ee7b1%3A0x94dde92c3823dbe4!2sPekanbaru%2C%20Kota%20Pekanbaru%2C%20Riau%2C%20Indonesia!5e0!3m2!1sid!2sus!4v1716957761615!5m2!1sid!2sus"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
        <form action="">
          <div c lass="input-group">
            <i data-feather="user">user:</i>
            <input type="text" placeholde r="nama" />
          </div>
          <div clas 
          s="input-group">
            <i data-feather="mail">mail:</i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <button type="submit" class="btn bg-white text-dark">kiri pesan</button>
        </form>
      </div>
    </section>
    <!-- contact section end -->
    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
      <p>
        Created with <i class="bi bi-heart-fill text-danger"></i> by
        <a
        href="https://www.instagram.com/sandhikagalih/"
        class="text-white fw-bold"
        >SMA01PERTANIAN</a
        >
      </p>
    </footer>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-8IwdYb5LR/EUjWXtV2yftz27S0HG+DpF2VtyGkm2VlFANoA9KCFF6NHWe6JP6h6H" crossorigin="anonymous"></script>
<!-- feathear icon -->
<script src="https://unpkg.com/feather-icons"></script>
<script>
  feather.replace();
  document.addEventListener('DOMContentLoaded', () => {
    console.log('Dokumen telah dimuat.');
    const buttons = document.querySelectorAll('.keyboard-detail-button');
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        alert('Detail akan ditampilkan!');
      });
    });
  });
  // untuk dilengkapi
</script>
<link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js">
</script>
  <!--  -->
    <script>
      gsap.from(".img-thumbnail", { duration: 2, rotationX: 360 });
      gsap.from(".navbar", {
        duration: 1.5,
        opacity: 0,
        y: "-100%",
        ease: "bounce",
      });
      gsap.from(".display-4", { delay: 1, duration: 1, opacity: 0, x: "-10%" });

      gsap.registerPlugin(TextPlugin);
      gsap.to(".lead", {
        delay: 1.5,
        duration: 2,
        text: "Lecturer | Content Creator",
      });

      const galleryImages = document.querySelectorAll(".gallery-img");
      const delayTimes = [0, 50, 100, 150, 200, 250, 300, 350, 400, 450];

      function shuffleArray(array) {
        for (var i = array.length - 1; i > 0; i--) {
          var j = Math.floor(Math.random() * (i + 1));
          var temp = array[i];
          array[i] = array[j];
          array[j] = temp;
        }
        return array;
      }
      const newDelay = shuffleArray(delayTimes);
      galleryImages.forEach((img, i) => {
        img.dataset.aos = "fade-up";
        img.dataset.aosDelay = i * 50 + "";
       
      });

      AOS.init({
        once: true,
        duration: 3000,
      });
    </script>

   

    <script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll(".keyboard-box"), {
        max: 35,
        speed: 1000,
        glare: true,
      });

      
    </script>
  </body>
</html>

