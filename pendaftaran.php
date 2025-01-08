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
            color: #4caf50;
          }

            body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow:auto;
    }

    .video-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1; /* Letakkan video di belakang konten */
    }

    .content {
      position: relative;
      z-index: 1;
      color: white;
      text-align: center;
      top: 50%;
      transform: translateY(-50%);
    }
            .nav-link{
                font-family: 'roboto';
                color: #fff;
            }
            .nav-link:hover {
                color: red;
                font-family: cursive;
            }
            /* Gaya dasar body */
            form {
                background-color: white;
                padding: 20px;
                margin: 20px auto;
                max-width: 500px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            
            fieldset {
                border: none;
            }
            
            /* Label */
            label {
                font-weight: bold;
                color: #444;
            }
            
            /* Input dan Textarea */
            input[type="text"], 
            textarea, 
            select {
                width: 100%;
                padding: 10px;
                margin: 10px 0 20px 0;
                border: 1px solid #ddd;
                border-radius: 5px;
                font-size: 1rem;
            }
            
            textarea {
                height: 80px;
                resize: none;
            }
            
            /* Radio Buttons */
            input[type="radio"] {
                margin-right: 5px;
            }
            
            /* Tombol Daftar */
            input[type="submit"] {
                background-color: #4caf50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 1rem;
                transition: background-color 0.3s ease;
            }
            
            input[type="submit"]:hover {
                background-color: #000;
            }
            
            /* Styling khusus untuk p */
            p {
                margin-bottom: 15px;
                
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
            </style>
  </head>
  <body >
  <video class="video-bg" autoplay muted loop>
    <source src="https://cdn.pixabay.com/video/2018/02/27/14560-258207713_large.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
    
  <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand text-white" href="#">SMA01MANDAU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav  ms-auto">
        <a class="nav-link" aria-current="page" href="home.php">HOME</a>
        <a class="nav-link" href="about.php">ABOUT</a>
        <a class="nav-link" href="pendaftaran.php">PENDAFTARAN</a>
        <a class="nav-link" href="list.php">LIST</a> 
      </div>
    </div>
  </div>
</nav>
<!--       -->
<section class="jumbotron text-center ">
      <img 
        src="https://i.pinimg.com/474x/13/6b/0a/136b0af2767145affba5fb4d8f024d12.jpg"alt="ival"
        width="200"
        class="rounded-circle img-thumbnail" />
      <h1 class="display-5">SMAN01</h1>
      <!-- <div class="container"> -->
        <div class="row justify-content-center">
          <div class="col-6 text-light text-center p-3" style="background-color: rgba(0,0,0,0.7); border-radius: 10px;">
            <p class="lead">SMA | PERMINYAKAN</p>
          </div>
</section>
<!--  -->
<section>
    <style>
    </style>
<form action="proses_pendaftaran.php" method="POST">
    <fieldset class="">
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap" />
        </p>
        <p>
            <label for="asal">Asal: </label>
            <input type="text" name="asal" placeholder="Asal" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" placeholder="Alamat lengkap"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Atheis">Atheis</option>
            </select>
        </p>
        <p>
            <label for="alumni">sekolah asal: </label>
            <input type="text" name="alumni" placeholder="alumni" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
    </fieldset>
</form>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
