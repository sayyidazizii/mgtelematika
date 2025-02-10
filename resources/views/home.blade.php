<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Diskominfo Tugas Kuliah Perancangan Web</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">

    <!-- Untuk menyambungkan ke CSS -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="{{ asset('/style.css') }}">

    <!-- Untuk menyambungkan ke JS -->
    <!-- <link rel="stylesheet" href="app.js"> -->
    <script  src="{{ asset('/js/app.js') }}"></script>
    <style>
        @media only screen and (min-width : 1200px) {
        .carousel-caption
        {
            top: 30%;
        }
        }
        .carousel-caption
        {
            top: 30%;
        }
        .carousel-caption h5{
            font-size: 45px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 25px;
            color:white;
        }
        .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 100px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
        font-size:22px;
        }

        .judul{
            color:#3e3167;
        }
        /* Container holding the image and the text */
        .container {
        position: relative;
        text-align: center;
        color: white;
        }

        /* Bottom left text */
        .bottom-left {
        position: absolute;
        bottom: 8px;
        left: 16px;
        }

        .bItem {
        display: flex;
        justify-content: flex-end;
        flex-direction: column;
        position: absolute;
        top: 0;
        right: 9px;
        bottom: 0;
        left: 9px;
        padding: 18px;
        background-size: cover;
        background-position: center center;
        /* background-image: url(http://kenwheeler.github.io/slick/img/fonz1.png); */
        }
        .bItem:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, transparent 0%, black 100%);
        }
    </style>

</head>

<body  style="padding-top:120px;">

<!------------------- Top Bar ---------------->
<div class=" fixed-top">
    <div class="text-white py-3"  style="background-color:#0095e1;">
        <div class="container d-flex justify-content-end pe-5">
            <div>
                <i class="fas fa-phone-alt"></i>
                <a href="tel:+62 264 200036" style="color: #fff; text-decoration: none;">(0264) 200036</a>
                &nbsp; | &nbsp;
                <i class="fas fa-envelope"></i>
                <a href="mailto:info@diskominfo.purwakartakab.go.id" style="color: #fff; text-decoration: none;">info@diskominfo.purwakartakab.go.id</a>
            </div>
        </div>
    </div>


<!---------------- Navbar ---------------->

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="logodiskominfo.jpg" height="40" class="me-2">
        </a>

        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active text-primary" href="#">Home</a>
                </li>
                <!-- Dropdown Profile -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown">
                        Profile
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sejarah</a></li>
                        <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="#">Tugas Pokok dan Fungsi</a></li>
                        <li><a class="dropdown-item" href="#">Daftar Pegawai</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
                <!-- Dropdown Gallery -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="galleryDropdown" role="button" data-bs-toggle="dropdown">
                        Gallery
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Gambar</a></li>
                        <li><a class="dropdown-item" href="#">Video</a></li>
                    </ul>
                </li>
                <!-- Dropdown Informasi -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="infoDropdown" role="button" data-bs-toggle="dropdown">
                        Informasi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dokumen Informasi</a></li>
                        <li><a class="dropdown-item" href="#">Agenda</a></li>
                        <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                        <li><a class="dropdown-item" href="#">Site Map</a></li>
                    </ul>
                </li>
                <!-- Dropdown Layanan -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">
                        Layanan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Permohonan Link Zoom Meeting</a></li>
                        <li><a class="dropdown-item" href="#">Aplikasi Diskominfo</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hubungi Kami</a>
                </li>
            </ul>

            <!-- Search Form -->
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Cari">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <!-- Language Selector -->
            <div class="ms-3">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" style="background-color:#0095e1;">
                        <img src="benderaind.jpg" alt="ID" width="25">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><img src="benderaind.jpg" width="20"> Indonesia</a></li>
                        <li><a class="dropdown-item" href="#"><img src="benderaing.jpg" width="20"> English</a></li>
                        <li><a class="dropdown-item" href="#"><img src="benderachina.jpg" width="20"> Mandarin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
</div>



<!---------------- Carausel bagian paling ---------------->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="gambar1.jpg" class="d-block w-100" alt="..." style="height: 700px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Selamat Datang!</h5>
        <p> Website Resmi Diskominfo Kabupaten Bandung <br>Kami hadir untuk memberikan informasi dan pelayanan terbaik kepada masyarakat Kabupaten Purwakarta</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gambar2.jpg" class="d-block w-100" alt="..." style="height: 700px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Selamat Datang!</h5>
        <p> Website Resmi Diskominfo Kabupaten Bandung <br>Kami hadir untuk memberikan informasi dan pelayanan terbaik kepada masyarakat Kabupaten Purwakarta</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gambar3.jpg" class="d-block w-100" alt="..." style="height: 700px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Selamat Datang!</h5>
        <p> Website Resmi Diskominfo Kabupaten Bandung <br>Kami hadir untuk memberikan informasi dan pelayanan terbaik kepada masyarakat Kabupaten Purwakarta</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gambar1.jpg" class="d-block w-100" alt="First slide" style="object-fit: cover; height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="gambar2.jpg" class="d-block w-100" alt="Second slide" style="object-fit: cover; height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="gambar3.jpg" class="d-block w-100" alt="Third slide" style="object-fit: cover; height: 400px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

  <!---------------- Progress Bar ---------------->

  <!-- <div class="carousel-progress">
    <div class="carousel-progress-bar"></div>
  </div>
</div> -->


<!---------------- Layanan  ---------------->
<div class="container text-center my-5">
    <h3 class="text-center judul">LAYANAN KAMI</h3>
    <div class="driver mx-auto  mb-5" style="width:80px;border:1px solid grey;"></div>
    <div class="row">
        <div class="col-md-4">
            <div class="border-0">
                <img src="logo1.png" alt="Image 1" class="layanan-image">
                    <h5 class="card-title judul">Profile Diskominfo</h5><br>
                    <a href="page1.html" class="btn btn-secondary"> Lihat Layanan » </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class=" border-0">
                <img src="logo2.png" alt="Image 2" class="layanan-image">
                    <h5 class="card-title judul">Layanan</h5><br>
                    <a href="page2.html" class="btn btn-secondary"> Lihat Layanan » </a>

            </div>
        </div>

        <div class="col-md-4">
            <div class="border-0">
                <img src="logo3.png" alt="Image 3" class="layanan-image">
                    <h5 class="card-title judul">PPID</h5><br>
                    <a href="page3.html" class="btn btn-secondary"> Lihat Layanan » </a>

            </div>
        </div>
    </div>
</div>


<!---------------- Galerry Foto ---------------->
<div class="container-fluid py-5" style="background-color:#0095e1;">
    <h3 class="text-center text-white mb-5">GALLERY FOTO</h3>
    <div class="owl-carousel owl-theme">
        @foreach($galleries as $gallery)
        <div class="item px-2">
            <a href="#" style="text-decoration:none;">
                <img src="{{ asset($gallery->image_path) }}" class="img-fluid rounded" alt="{{ $gallery->name }}">
                <h5 class="text-center text-light">{{ $gallery->name }}</h5>
            </a>
        </div>
        @endforeach
    </div>
</div>


<!---------------- Informasi Penting ---------------->
<div class="container-fluid pt-5  mb-2 my-5">
    <h3 class="text-center judul">INFORMASI PENTING</h3>
    <div class="driver mx-auto  mb-5" style="width:80px;border:1px solid grey;"></div>
    <div class="owl-carousel owl-theme">
        @foreach($informations as $information)
        <div class="item">
            <div class="rounded text-center p-2 mx-4 my-2" style="background-color:#0095e1;color:#fff;">
                <img src="{{ asset($information->image_path) }}" class="img-fluid rounded" alt="{{ $information->title }}">
                <h5 class="text-center text-primary text-light">{{ $information->slug }}<br><br><br></h5>
                <a href="#" class="btn btn-light" >Lihat Detail</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!---------------- Berita Terbaru Section ---------------->
<section class="berita-terbaru py-5 mt-5">
    <div class="container">
        <h3 class="text-center judul">BERITA TERBARU</h3>
        <div class="driver mx-auto mb-5" style="width:80px; border:1px solid grey;"></div>
        <div class="row">
            <!-- Card Berita Utama -->
            <div class="col-lg-8">
                <div class="position-relative rounded overflow-hidden">
                    <img src="gambar1.jpg" alt="Berita Utama" style="width:100%; object-fit: cover;" class="rounded">
                    <!-- Gradient Overlay -->
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, 4) 100%);">
                    </div>
                    <!-- Teks Berita -->
                    <div class="position-absolute bottom-0 text-light p-4">
                        <h5 class="card-title text-start">PURWAKARTA RESMI BERJALANNYA PROGRAM MAKAN GRATIS</h5>
                        <p class="card-text text-start">Alhamdulillah Purwakarta resmi menerapkan program makan gratis dan akan mulai di uji cobakan</p>
                    </div>
                </div>
            </div>



<!---------------- Berita Populer Sidebar ---------------->

<div class="col-lg-4">
    <div style="border-left:3px solid #3e3167;padding-left:10px;">
        <h3 class="pl-1 judul">CARI BERITA</h3>
    </div>
    <form class="d-flex my-2">
        <input class="form-control me-2" type="search" placeholder="Cari Berita">
        <button class="btn btn-outline-secondary" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </form>
    <div class="card" style="border:2px solid #0095e1;">
        <div class="card-header text-white" style="background-color:#0095e1;">
            <h5 class="m-0 text-center">BERITA POPULER</h5>
        </div>
        <div class="card-body">
            <!-- <input type="search" class="form-control mb-3" placeholder="Cari Berita"> -->
            <!-- <h6 class="font-weight-bold">Berita Populer</h6> -->
            <ul class="list-unstyled" style="max-height: 340px; overflow-y: auto;">
                <!-- Berita 1 -->
                <li class="d-flex mb-3">
                    <img src="gambar1.jpg" alt="Berita 1" class="img-thumbnail" style="width: 210px; height: 80px; object-fit: cover;">
                    <div class="ms-3" style="text-align:left;">
                        <h6><a href="#" class="text-decoration-none text-dark">Aplikasi E-Kin Baru, Kinerja ASN Dinilai Sesuai Tupoksi dan Perjanjian Kerja</a></h6>
                    </div>
                </li>
                <!-- Berita 2 -->
                <li class="d-flex mb-3">
                    <img src="gambar2.jpg" alt="Berita 3" class="img-thumbnail" style="width: 210px; height: 80px; object-fit: cover;">
                    <div class="ms-3" style="text-align:left;">
                        <h6><a href="#" class="text-decoration-none text-dark">Aplikasi E-Kin Baru, Kinerja ASN Dinilai Sesuai Tupoksi dan Perjanjian Kerja</a></h6>
                    </div>
                </li>
                <!-- Berita 3 -->
                <li class="d-flex mb-3">
                    <img src="gambar2.jpg" alt="Berita 5" class="img-thumbnail" style="width: 210px; height: 80px; object-fit: cover;">
                    <div class="ms-3" style="text-align:left;">
                        <h6><a href="#" class="text-decoration-none text-dark">Pentingnya Pelatihan Berkelanjutan untuk Peningkatan Kualitas ASN</a></h6>
                    </div>
                <!-- Berita 4 -->
                <li class="d-flex mb-3">
                    <img src="gambar1.jpg" alt="Berita 5" class="img-thumbnail" style="width: 210px; height: 80px; object-fit: cover;">
                    <div class="ms-3" style="text-align:left;">
                        <h6><a href="#" class="text-decoration-none text-dark">Pentingnya Pelatihan Berkelanjutan untuk Peningkatan Kualitas ASN</a></h6>
                    </div>
                </li>
                </li>
            </ul>
        </div>
    </div>
</div>



<!---------------- Card Berita Lainnya ----------------->

    </div>
</section>

<!---------------- Coba Berita ---------------->
<div class="container px-4 mb-3">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card" style="width: 100%; height: 100%;border:5px solid #0095e1;">
                <!-- Card Image -->
                <img src="gambar1.jpg" class="card-img-top" alt="Berita 1" style="height: 180px; object-fit: cover;">
                <div class="card-body text-light"  style="background-color:#0095e1;">
                    <h5 class="card-title">Inovasi Teknologi Pemerintah dalam Peningkatan Kinerja ASN</h5>
                    <p class="card-text">Mengupas bagaimana teknologi terbaru dapat meningkatkan efisiensi dan kinerja ASN di seluruh Indonesia.</p>
                    <hr>
                    <p class="card-text">26 Maret 2025</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card" style="width: 100%; height: 100%;border:5px solid #0095e1;">
                <!-- Card Image -->
                <img src="gambar2.jpg" class="card-img-top" alt="Berita 2" style="height: 180px; object-fit: cover;">
                <div class="card-body text-light" style="background-color:#0095e1;">
                    <h5 class="card-title">Strategi Pemerintah dalam Mengatasi Krisis ASN</h5>
                    <p class="card-text">Penjelasan mengenai berbagai upaya yang dilakukan pemerintah untuk mengatasi tantangan dalam bidang ASN.</p>
                    <hr>
                    <p class="card-text">27 Maret 2025</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card" style="width: 100%; height: 100%;border:5px solid #0095e1;">
                <!-- Card Image -->
                <img src="gambar3.jpg" class="card-img-top" alt="Berita 3" style="height: 180px; object-fit: cover;">
                <div class="card-body text-light" style="background-color:#0095e1;">
                    <h5 class="card-title">Menghadapi Transformasi Digital di Pemerintahan</h5>
                    <p class="card-text">Artikel ini membahas transformasi digital yang sedang berlangsung di pemerintahan dan dampaknya pada ASN.</p>
                    <hr>
                    <p class="card-text">28 Maret 2025</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card" style="width: 100%; height: 100%;border:5px solid #0095e1;">
                <!-- Card Image -->
                <img src="gambar4.jpg" class="card-img-top" alt="Berita 4" style="height: 180px; object-fit: cover;">
                <div class="card-body text-light" style="background-color:#0095e1;">
                    <h5 class="card-title">Kolaborasi Antar ASN untuk Mencapai Tujuan Bersama</h5>
                    <p class="card-text">Pembahasan mengenai pentingnya kerjasama antar ASN dalam mencapai tujuan bersama dan meningkatkan kinerja organisasi.</p>
                    <hr>
                    <p class="card-text">29 Maret 2025</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!---------------- Profil Section ---------------->

<section class="profile-section bg-white py-5 mt-5">
    <div class="container text-center">
        <div class="row justify-content-center">
            <!-- Foto Profil -->
            <div class="col-12">
                <img src="bapakrudihartono.png" alt="Rudi Hartono" class="img-fluid rounded-circle profile-photo">
            </div>

            <!-- Deskripsi Profil -->
            <div class="col-md-8 profile-description text-dark">
                <h2 class="fw-bold">Rudi Hartono, S.Ap.</h2> </tr>
                <p>Assalamualaikum Wr. Wb.</p>
                <p>Wilujeng Sumping di Website Dinas Komunikasi dan Informatika Kabupaten Purwakarta. Website ini salah satu media penyampai informasi dan sebagai jembatan untuk membangun komunikasi interaktif antara pemerintah dengan masyarakat/pengunjung. Harapan kami semoga website Diskominfo dapat memberikan kontribusi dalam meningkatkan pelayanan informasi kepada masyarakat.</p>
            </div>
        </div>
    </div>
</section>




<!---------------- Footer Section ---------------->

<footer class="footer"  style="background-color:#0095e1;">
    <div class="container-fluid">
        <div class="container">
            <div class="footer-content">
                <!-- Kolom 1: Info Kontak -->
                <div class="footer-section">
                    <h3 class="text-start">Jam Kerja</h3>
                        <div class="underline"></div>
                        <table class="working-hours">
                            <tr><td>Senin</td><td>07:30 - 16:15</td></tr>
                            <tr><td>Selasa</td><td>07:30 - 16:15</td></tr>
                            <tr><td>Rabu</td><td>07:30 - 16:15</td></tr>
                            <tr><td>Kamis</td><td>07:30 - 16:15</td></tr>
                            <tr><td>Jumat</td><td>07:30 - 16:15</td></tr>
                            <tr class="closed">
                                <td>Sabtu</td>
                                <td><button class="btn btn-danger">CLOSED</button></td>
                            </tr>
                            <tr class="closed">
                                <td>Minggu</td>
                                <td><button class="btn btn-danger">CLOSED</button></td>
                            </tr>
                        </table>
                    </div>

                <!-- Kolom 2: Jam Kerja -->
                <div class="footer-section">
                    <h3 class="text-start">Info Kontak</h3>
                        <div class="underline"></div>
                        <p><i class="fas fa-envelope"></i>
                            <a href="mailto:info@diskominfo.purwakartakab.go.id">info@diskominfo.purwakartakab.go.id</a>
                        </p>
                        <p><i class="fas fa-phone-alt"></i>
                            <a href="tel:+62 264 200036">(0264) 200036</a>
                        </p>
                    </div>

                <!-- Kolom 3: Alamat -->
                <div class="footer-section">
                    <h3 class="text-start">Alamat</h3>
                    <div class="underline"></div>
                    <p class="text-start">Jl. Gandanegara No.25, Nagri Kidul, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 4111</p>
                    <iframe src="https://maps.google.com/maps?q=Jl.%20Gandanegara%20No.25%2C%20Nagri%20Kidul%2C%20Purwakarta%2C%20Jawa%20Barat%204111&output=embed"
                        width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>

                <!-- Kolom 4: Sosial Media & Link Terkait -->
                <div class="footer-section">
                    <h3 class="text-start">Sosial Media</h3>
                    <div class="underline"></div>
                    <ul class="social-links">
                        <li><a href="https://www.instagram.com/diskominfopwk?igsh=MXh6N2txdzVzcTltdA=="><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href="https://www.facebook.com/DiskominfoKabPWK?mibextid=ZbWKwL"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="https://www.tiktok.com/@diskominfo.pwk"><i class="fab fa-tiktok"></i> Tiktok</a></li>
                        <li><a href="http://x.com/DiskominfoPWK"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="https://www.youtube.com/@diskominfopurwakartachanne6484"><i class="fab fa-youtube"></i> Youtube</a></li>
                    </ul>

                    <h3 class="text-start">Link Terkait</h3>
                    <div class="underline"></div>
                    <ul class="related-links text-start">
                        <li><a href="https://purwakartakab.go.id/">Pemda Kabupaten Purwakarta</a></li>
                        <li><a href="https://setda.purwakartakab.go.id/">Sekretariat Kota Purwakarta</a></li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="footer-bottom">
                <p>&copy; DiskominfoKabPurwakarta - 2025</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"></script>
<script src="{{ asset('/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
<script>
    $('.owl-carousel').owlCarousel({
        stagePadding: 100,
        loop:true,
        margin:10,
        autoHeight: false,
        autoplay: true,
            autoplayHoverPause: true,
            loop: true,
            autoplayTimeout: 2000,
            items: 2,
        nav:false,
        stageClass: 'owl-stage d-flex',
        responsive:{
            0:{
                items:3
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })

</script>
</body>
</html>
