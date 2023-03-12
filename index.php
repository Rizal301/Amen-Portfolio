<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCsYM4lWYQ3-8m8tj1UnvQBA&key=AIzaSyBFoOKcjTUkO_erfNjgplIdF58cNFVgfyw');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result, true);

$username_yt = $result['items'][0]["snippet"]['title'];
$subscriber_yt = $result['items'][0]['statistics']['subscriberCount'];
$customurl_yt = $result['items'][0]["snippet"]["customUrl"];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>My Portfolio = Amen Tobing</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="foto.jpg" type="image/x-icon">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"> Amen Togu H.L.T</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <hr>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Halaman Utama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#social">Media Sosial</a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link disable" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Belum Tersedia" data-bs-custom-class="custom-tooltip-white" disable>Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <!-- Jumbotron -->
      <section class="jumbotron text-center text-white pb-5">
        <div class="container">
          <img src="foto.jpg" alt="My Photo" width="175" class="shadow img-fluid rounded-circle" />
          <h1 class="display-4" id="jumbotron">Amen Togu H.L.T</h1>
          <p class="lead">Technical Student | Junior Programmer | Junior Video Editor | Noob Gamer</p>
        </div>
      </section>
      
      <!-- Social -->
      <section class="social pt-5 pb-5">
        <h1 class="display-6 text-center text-white-50 fw-semibold" id="social"><u>Media Sosial</u></h1>
        <div class="row justify-content-center pt-4 align-items-center text-white-50">
          <div class="col-5">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-3"><a href="https://www.youtube.com/<?= $customurl_yt ?>" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Lihat di Youtube" data-bs-custom-class="custom-tooltip"><img class="rounded mx-auto d-block img-fluid youtube-logo" src="https://www.gstatic.com/youtube/img/branding/favicon/favicon_144x144.png" alt="youtube logo" width="88.5" /></a></div>
              <div class="col-md-5">
                <li class="list-group-item fw-semibold">Channel: <?= $username_yt ?></li>
                <li class="list-group-item fw-semibold">Subscriber: <?= $subscriber_yt ?></li>
              </div>
            </div>
          </div>
          <div class="col-5">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-3"><a href="http://www.instagram.com/amentogu/" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Lihat di Instagram" data-bs-custom-class="custom-tooltip"><img class="rounded mx-auto d-block img-fluid" src="instagram.png" alt="instagram logo" width="90" /></a></div>
              <div class="col-md-5">
                <li class="list-group-item fw-semibold">Username: amentogu</li>
                <li class="list-group-item fw-semibold">Followers: 614</li>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center align-items-center justify-content-center pt-3">
          <div class="col-md-5">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed?listType=playlist&list=PL-NflXENzDRQT--VB5uU6Cg8hBbNFrN8L" title="YouTube video" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-5"><img src="waifu.jpg" alt="Instagram Photo" width="265" class="img-fluid rounded mx-auto d-block" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Apa liat - liat?" data-bs-custom-class="custom-tooltip"></div>
        </div>
      </section>

      <!-- Footer -->
      <section class="footer pt-3 pb-3 bg-dark">
        <div class="copyright text-center text-white justify-content-center">
          <div class="row">
            <div class="col-md-12 align-item-center">
              <u class="rounded"> Copyright by Mamen ©2023</u>
            </div>
          </div>
        </div>
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
  </body>
</html>
