<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Simrsku</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/pku_ico.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/pku_ico.png') }}">

  <!-- Google Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet"> --}}
  <link href="{{ asset('assets/css/font.css') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- Date Time Picker -->
  <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a class="logo">
        {{-- <img src="{{ asset('img/pku_ico.png') }}" alt="" class="img-fluid"> --}}
        <img src="{{ asset('img/logo-admin-new.png') }}" alt="" class="img-fluid">
      </a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">#</a></li>
          <li><a class="nav-link scrollto" href="#tentang">Vaksin</a></li>
          <li><a class="nav-link scrollto" href="#readme">Syarat</a></li>
          <li><a class="nav-link scrollto " href="#daftar">Daftar</a></li>
          {{-- <li><a class="nav-link scrollto" href="#team">Kontak</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <h4>Tunggu apalagi..</h4>
            <p>Mari sukseskan program vaksinasi COVID-19 yang diberikan gratis oleh pemerintah untuk seluruh rakyat Indonesia</p>
            {{-- <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            {{-- <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p> --}}
            <img src="{{ asset('img/vaksin/save_planet.png') }}" style="width:70%" alt="" class="img-fluid"><br>
            <h5>Lindungi Diri dan Keluarga<br>Dengan <strong>Vaksinasi Covid-19</strong></h5>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Situs Utama</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.pkusukoharjo.com">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://pkusukoharjo.com/profil/">Profil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://pkusukoharjo.com/dokter-spesialis/">Dokter Spesialis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://pkusukoharjo.com/jadwal-pelayanan/">Jadwal Pelayanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://pkusukoharjo.com/pendaftaran-oline/">Pendaftaran Online</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Promosi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://pkusukoharjo.com/eposter/">E-Poster</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://pkusukoharjo.com/mutiara-hikmah/">Mutiara Hikmah</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial Media</h4>
            <p>Tetap terhubung dengan Kami</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/pkusukoharjo/" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/pku.sukoharjo/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/pku.sukoharjo/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UChgodAUFt7N3Hfcs6RPlOTQ/" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a href="https://www.pkusukoharjo.com" class="web"><i class="bx bx-globe"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        2021 &copy; <strong><span>simrsku</span></strong>
      </div>
      <div class="credits">
        <h6><strong>ASRI</strong> (Amanah, Santun, Ramah, Ikhlas)</h6>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <!-- JQuery -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>

  <!-- Moment JS -->
  <script src="{{ asset('js/moment.min.js') }}"></script>

  <!-- Date Time Picker -->
  <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>

</body>

</html>
