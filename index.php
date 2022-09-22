<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

// Instagram API
$clientId = '3167924910117506';
$accessToken = 'IGQVJYWl92enYzSldTdElscUtDVFc2TVRmRTNCVURtakQ0ck01QTF4cFJDUHZAiYTc5dHpfNFZAmdUV4RTlfSm5uRnpVeGpzZAWpWUnJjOVRjbjZAQSXkwSU9DUDRIbXVESTA0elpITEJmY09FZAkQ5bWJsQwZDZD';

// latest IG Post
$result = get_CURL('https://graph.instagram.com/me/media?fields=id,media_type,media_url,caption,username,timestamp,permalink&access_token=IGQVJVdUZAVdk9oWkJacndGZAUN2aEQ3NkYzQ0g3b2lPcld2al85MFVLMndmbXpOYmhpdC1rd0xLcklKZAU9sQnhxVEE0c2dvbGhEcTFUV2RDQlh4dTYwSEdDN21VTUYtQUFEeXVBdUtsbER3c0JHZA0ZAXXwZDZD');

$photos = [];
foreach ($result['data'] as $photo){
  $photos[] = $photo['media_url'];
}


$likns = [];
foreach ($result['data'] as $link){
  $likns[] = $link['permalink'];
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Semhas</title>

  <!-- 
    - favicon
  -->
  <!-- <link rel="shortcut icon" href="./favicon1.svg" type="image/svg+xml"> -->

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/10-removebg-preview (1).png" alt="Landio logo">
      </a>

      <!-- <a href="#" class="logo">UMKM</a> -->

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <li>
            <a href="#hero" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#Produk" class="navbar-link">Produk</a>
          </li>

          <li>
            <a href="#ProfileUsaha" class="navbar-link">Profile Usaha</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link">Hubungi Kami</a>
          </li>

        </ul>

        <!-- <div class="header-actions">
          <a href="#" class="header-action-link">Log in</a>

          <a href="#" class="header-action-link">Register</a>
        </div> -->
      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - HERO
      -->

      <section class="hero" id="hero">
        <div class="container">

          <div class="hero-content">
            <h1 class="h1 hero-title">Selamat Datang di 
              UMKM kami</h1>

            <p class="hero-text">
              Eksplor halaman ini untuk melihat produk-produk yang tersedia di UMKM kami
            </p>
          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner copy.png" alt="Hero image">
          </figure>

        </div>
      </section>




      <!-- 
        - BLOG
      -->

      <section class="Produk" id="Produk">
        <div class="container">

          <h2 class="h2 section-title">Products</h2>

          <p class="section-text">
          Berikut ini produk-produk dari UMKM kami
          </p>
          
           
          <ul class="blog-list">
          <?php foreach ($photos as $photo) : ?>
            
            <li>
            
              <div class="blog-card">
                <figure class="blog-banner">
                  <img src="<?= $photo; ?>" alt="Best Product UMKM">
                </figure>
              </div>
              
            </li>
            <?php endforeach; ?>
                <?php foreach ($likns as $link) : ?>
                <!-- <a href="<?= $link; ?>" class="blog-link-btn">
                
                  <span>Learn More</span>
                  
                  <ion-icon name="chevron-forward-outline"></ion-icon> -->
                  <a href="<?= $link; ?>" class="btn btn-outline"> View Details</a>
                </a>
                <?php endforeach; ?> 
              
            </ul>


        </div>

        </section>



              <!-- 
        - ProfileUsaha
      -->

      <section class="features" id="ProfileUsaha">
        <div class="container">

          <!-- <h2 class="h2 section-title">Awesome Features</h2>

          <p class="section-text">
            Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta nobis eligendi
            cumque.
          </p> -->

          <div class="features-wrapper">

            <figure class="features-banner">
              <img src="./assets/images/IMG20210807104829 (1).png" alt="illustration art">
            </figure>

            <div class="features-content">

              <p class="features-content-subtitle">
                <ion-icon name="sparkles"></ion-icon>

                <span>PROFILE USAHA</span>
              </p>

              <!-- <h3 class="features-content-title">
                Build <strong>community</strong> & <strong>conversion</strong> with our suite of <strong>social
                  tool</strong>
              </h3> -->

              <p class="features-content-text">
              Ayah saya bekerja sebagai penjual es di pasar. Beliau mulai bekerja sejak 30 tahun
              yang lalu. Ayah bekerja sejak pukul 10 pagi hingga pukul 5 sore, beliau bekerja setiap
              hari dan keadaan fisiknya sangat baik atau sehat sedangkan Ibu saya tidak bekerja, 
              akan tetapi ibu membantu ayah untuk mempersiapkan bahanbahan untuk berjualan hingga 
              ke proses memasak. Bahkan jika kondisi pasar ramai ibu turut membantu ayah di pasar, 
              keadaan fisiknya baik atau sehat
              </p>
            </div>

          </div>
        </div>
      </section>


      <!-- 
        - CONTACT
      -->

      <section class="contact" id="contact">
        <div class="container">

          <h2 class="h2 section-title">Hubungi Kami</h2>

          <p class="section-text">
            Bila ada pertanyaan lebih lanjut silakan hubungi dibawah ini 
          </p>

          <div class="contact-wrapper">

            <!-- <form action="" class="contact-form">

              <div class="wrapper-flex">

                <div class="input-wrapper">
                  <label for="name">Nama*</label>

                  <input type="text" name="name" id="name" required placeholder="Masukkan Nama Anda" class="input-field">
                </div>

                <div class="input-wrapper">
                  <label for="emai">Email*</label>

                  <input type="text" name="email" id="email" required placeholder="Masukkan Email Anda"
                    class="input-field">
                </div>

              </div>

              <label for="message">Pesan*</label>

              <textarea name="message" id="message" required placeholder="Ketik Pesan Anda"
                class="input-field"></textarea>

              <button type="submit" class="btn btn-primary">
                <span>Kirim Pesan</span>

                <ion-icon name="paper-plane-outline"></ion-icon>
              </button>

            </form> -->

            <ul class="contact-list">

              <li>
                <a href="mailto:r.tullah767@gmail.com" class="contact-link">
                  <ion-icon name="mail-outline"></ion-icon>

                  <span>: r.tullah767@gmail.com</span>
                </a>
              </li>

              <!-- <li>
                <a href="#" class="contact-link">
                  <ion-icon name="globe-outline"></ion-icon>

                  <span>: www.website.com</span>
                </a>
              </li> -->

              <li>
                <a href="https://api.whatsapp.com/send?phone=6289630114404&text=Halo, saya ingin pesan produk" class="contact-link">
                  <ion-icon name="call-outline"></ion-icon>
                  
                  <span>: (+62) 89 630 114 404</span>
                </a>
              </li>

              <li>
                <div class="contact-link">
                  <ion-icon name="time-outline"></ion-icon>

                  <span>: 10:00 AM - 5:00 PM</span>
                </div>
              </li>

              <li>
                <a href="https://goo.gl/maps/3BK4CFEnRzNzrtQ17" class="contact-link">
                  <ion-icon name="location-outline"></ion-icon>

                  <address>: M7VW+932, Pancoran Kulon, Rogojampi, 
                    Kec. Rogojampi, Kabupaten Banyuwangi, 
                    Jawa Timur 68462</address>
                </a>
              </li>

            </ul>

          </div>

        </div>
      </section>

    </article>
  </main>


  

  <!-- 
    - FOOTER
  -->

  <footer>
    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2022 <a href="">Poliwangi</a>.
        </p>
      </div>
    </div>

  </footer>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>