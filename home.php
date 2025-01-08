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
<style>
  body{
    /* background-color: black; */
    color: #91165E;
    font-family: 'Roboto+flex';
    background-color: #206672;
  }
  .nav-link{
    font-family: fantasy;
    color: white ;
  }
  .nav-link:hover {
    color: red;
    font-family: cursive;
  }
  .jumbotron{
    background-image: url(https://i.pinimg.com/474x/0e/41/ad/0e41adde88eb2668d1fc7bfe2579da30.jpg);
    /* background-size: auto; */
    background-position: center;
    background-size: cover;
  }
  .navbar {
    padding: 1.4rem 7%;
    position: fixed;
    padding: 1.4rem 7%;
    background-color: rgba(1, 1, 1, 0.8);
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
  }
  .roure{
    background-color: #ACB5BD;
          }
  .image-column {
    position: relative;
    text-align: center;
    color: white;
  }
  .overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.5);
     /* Optional: memberi latar belakang */
    padding: 10px 0px;
    border-radius: 5px;
  }
  .image-column img {
    width: 90%;
    height: auto;
  }
  .about{
    font-family: 'rowdies';
    background-color: #778B9C;
  }
 
</style>
</head>
  <body >
    <!-- bagian1 -->
  <nav class="navbar navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand text-white " href="#">SMA01MANDAU</a>
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
        <a class="nav-link" aria-current="page" href="">HOME</a>
        <a class="nav-link" href="about.php">ABOUT</a>
        <a class="nav-link" href="pendaftaran.php">PENDAFTARAN</a>
        <a class="nav-link" href="list.php">LIST</a>
        </div>
      </div>
    </div>
  </nav>
  <!--bagian 2 -->
  <section class="jumbotron text-center ">
      <img 
        src="https://i.pinimg.com/474x/13/6b/0a/136b0af2767145affba5fb4d8f024d12.jpg"alt="ival"
        width="200"
        class="rounded-circle img-thumbnail" />
      <h1 class="display-1">SMAN01</h1>
      <!-- <div class="container"> -->
        <div class="row justify-content-center">
          <div class="col-6 text-light text-center p-3" style="background-color: rgba(0,0,0,0.7); border-radius: 10px;">
            <p class="lead">SMA | PERMINYAKAN</p>
          </div>
            <svg 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 1440 320">
            <path
              fill="#206672"
              fill-opacity="10"
              d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,80C672,64,768,64,864,96C960,128,1056,192,1152,186.7C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
              ></path>
            </svg>
        </section>
        <!-- bagian3 -->
        <section id="about" class="about py-3">
  <div class="container">
    <h2 class="text-center mb-8"><span class="text-light"> TENTANG</span> KAMI</h2>
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="https://i.pinimg.com/474x/ca/b7/da/cab7da6d6615a0ef49e3747da4211d1a.jpg" 
            alt="tentang kami" class="img-fluid rounded-circle">
      </div>
      <div class="col-md-6 text-center">
        <h3>Kenapa memilih SMAO1 PERTANIAN kami</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam cumque excepturi voluptas suscipit, dolore molestiae?</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius aperiam illum consectetur dolorum iusto, numquam unde dicta earum quia reiciendis?</p>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section id="about" class="about py-5">
  <div class="container">
    <h2 class="text-center mb-4"><span class="text-light"> BAGIAN </span>KAMI</h2>
    <div class="row">
      <!-- Foto 1 -->
      <div class="col-md-4 d-flex align-items-center mb-4">
        <img src="img/57b34c4b-8a3f-4d2b-b015-53886a476110.jpeg" alt="Foto 1" class="img-fluid rounded-circle me-3">
        <div>
          <h4 class="text-center">ketua osis</h4><p class="text-center">REVAL</p>
          
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, tempore.</p>
        </div>
      </div>
      <!-- Foto 2 -->
      <div class="col-md-4 d-flex align-items-center mb-4">
        <img src="img/9420b939-d06f-4a5f-925f-999924067522.jpeg" alt="Foto 2" class="img-fluid rounded-circle me-3">
        <div>
          <h4 class="text-center">wakil osis</h4><p class="text-center">RISWAN</p>
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, tempore.</p>
        </div>
      </div>
      <!-- Foto 3 -->
      <div class="col-md-4 d-flex align-items-center mb-4">
        <img src="img/f1234c38-c982-4a81-9f4c-2bfa5adcd02c.jpeg" alt="Foto 3" class="img-fluid rounded-circle me-3">
        <div>
          <h4 class="text-center">penasehat</h4><p class="text-center">EZI</p>
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, tempore.</p>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- bagian4 -->

<section class="roure center">
  
  <div class="mt-4 text-center">
    <h1>PERLENGKAPAN</h1>
  </div>
  <div class="container ">
    <div class="row justify-content-center ">
      <!-- Column 1 -->
      <div class="col-md-4 image-column">
        <img src="https://i.pinimg.com/474x/25/42/9b/25429ba1cc9d5b8537a593629ba5e4c8.jpg" alt="Column 1">
        <div class="overlay-text">LABOR BIOLOGIE</div>
      </div>
      <!-- Column 2 -->
      <div class="col-md-4 image-column">
        <img src="https://i.pinimg.com/474x/64/a9/a7/64a9a705a2edf508259b6cef74a2f60e.jpg" alt="Column 2">
        <div class="overlay-text">LAPANGAN BASKET</div>
      </div>
      <!-- Column 3 -->
      <div class="col-md-4 image-column">
        <img src="https://i.pinimg.com/736x/5d/57/bb/5d57bb741efb9fa286a5e0d5a0c10e4c.jpg" alt="Column 3">
        <div class="overlay-text">LAB COMPUTER</div>
      </div>
      <!-- Column 4 -->
      <div class="col-md-4 image-column">
        <img src="https://i.pinimg.com/474x/d3/4e/09/d34e09ce7ac96ff9f28f5eb0a0e09da1.jpg">
        <div class="overlay-text">PERPUSTAKAAN</div>
      </div>
      <!-- Column 5 -->
      <div class="col-md-4 image-column">
        <img src="https://i.pinimg.com/474x/7a/3f/50/7a3f5079c1d8a1a70a20038681e99b58.jpg">
        <div class="overlay-text">LAPANGAN FUDSAL</div>
      </div>
    </div>
  </div>
</section>













<!-- Footer -->
<section>
<svg xmlns="http://www.w3.org/2000/svg" 
  viewBox="0 0 1440 320"><path 
  fill="#ACB5BD" 
  fill-opacity="1" d="M0,128L26.7,138.7C53.3,149,107,171,160,181.3C213.3,192,267,192,320,176C373.3,160,427,128,480,122.7C533.3,117,587,139,640,160C693.3,181,747,203,800,202.7C853.3,203,907,181,960,170.7C1013.3,160,1067,160,1120,170.7C1173.3,181,1227,203,1280,202.7C1333.3,203,1387,181,1413,170.7L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
</path>
</svg>
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
</section>
<!-- Akhir Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>
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
        // img.dataset.aosDelay = newDelay[i];
      });

      AOS.init({
        once: true,
        duration: 3000,
      });
    </script>

</body>
</html>
