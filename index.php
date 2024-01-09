<?php

// Create database connection using config file
include ("connection/config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>SMKIT Ibnul Qayyim</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/icon/logo.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

   
  </head>
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top shadow-sm">
      <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="index.html">SMKIT Ibnul Qayyim</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li class="dropdown">
              <a href="#about"><span>About</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#services">Program</a></li>
                <li><a href="#why-us">Kurikulum</a></li>
                <li><a href="#portfolio">Fasilitas</a></li>
                <li><a href="#pricing">Lulusan</a></li>
                <li><a href="#skills">Mitra PKL</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto active" href="#faq">FAQ</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>Hafidz Qur'an Jago Komputer</h1>
            <h2>Kompetensi Keahlian Rekayasa Perangkat Lunak <br> <small>Pendidikan yang berkarakter dan berakhlak mulia</small></h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSdrm7ZMBIbqCUdX1Kg5xmwdMj3jelMg9smU7v14hO8DNX35mg/viewform" class="btn-get-started scrollto">Daftar Now</a>
              <a href="https://youtu.be/a9BZY4A3aPw?si=VkZJ2NSegjzWgjQZ" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/iqis.PNG" class="img-fluid animated" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Item Section ======= -->
      <section id="clients" class="clients section-bg">
        <div class="container">
          <div class="row" data-aos="zoom-in">
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/simbol/aqidah shalihah.png" class="img-fluid" alt=""/>
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/simbol/akhlak karimah.png" class="img-fluid" alt="" />
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/simbol/tahfizh Al-Qur'an.png" class="img-fluid" alt="" />
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/simbol/tahfizh hadist.png" class="img-fluid" alt="" />
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/simbol/bahasa asing.png" class="img-fluid" alt="" />
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/simbol/teknologi informasi.png" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- End Item Section -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Visi & Misi</h2>
          </div>

          <div class="row content text-center">
            <div class="col-lg-6 pt-4 pt-lg-0 mb-3">
              <h2>Visi Sekolah</h2>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <h2>Misi Sekolah</h2>
            </div>
          </div>
          <div class="row content">
            <div class="col-lg-6 text-center">
              <p style="text-align: justify">
                Di zaman ini seorang muslim yang cerdas cukup menguasai minimal <b style="color: orange">satu</b> bidang <b style="color: lightseagreen">Ilmu Dunia</b> agar dapat bersaing, lalu selebihnya digunakan untuk mempelajari
                <b style="color: orange">seluruh</b> aspek <b style="color: green">Ilmu Agama</b> agar dapat selamat di Akhirat. Visi Utama Kami Ialah :
              </p>
              <h4>Mencetak Generasi Muslim yang <b style="color: green">Shalih</b>, <b style="color: orange">Hafizh</b>, dan <b style="color: lightseagreen">Terampil</b></h4>
            </div>
            <div class="col-lg-6">
              <ul>
                <li>
                  <i class="ri-check-double-line"></i> Mendidik siswa untuk senantiasa bertaqwa kepada Allah Subhanahu Wata'ala dan berbakti kepada kedua orang tua dengan cara yang ma'ruf sesuai tuntutan Rasulullah Sallallahu Alaihi
                  Wassallam
                </li>
                <li><i class="ri-check-double-line"></i> Mendidik siswa tentang adab islam dengan harapan agar siswa memiliki akhlak mulia sebagaimana akhlak Rasulullah Sallallahu Alaihi Wassallam dalam bersikap dengan sesama</li>
                <li><i class="ri-check-double-line"></i> Mendidik agar siswa mencintai Al-Qur'an dan Hadits, mengamalkan isi keduanya, menghafalkannya dan memahaminya sesuai pemahaman para Salafush Shalih</li>
                <li><i class="ri-check-double-line"></i>Membekali siswa keterampilan bahasa asing dan teknologi informasi (IT) agar menjadi muslim yang produktif, mandiri, dan kreatif</li>
                <li><i class="ri-check-double-line"></i>Menjadikan sekolah sebagai sumber informasi, edukasi, dan diseminasi IPTEK bai industri lokal disekitar, khusunya industri kecil dan menengah</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->

            <!-- ======= Program Unggulan ======= -->
            <section id="services" class="services section-bg">
              <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <h2>Program Unggulan</h2>
                  <p>Kami menawarkan program unggulan yang memungkinkan siswa mendapatkan pengetahuan dan skill yang terintegrasi dengan nilai-nilai keagamaan</p>
                </div>
                <div class="row mb-3">
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                      <div class="icon"><iconify-icon icon="icon-park:index-finger" width="40" height="40"></iconify-icon></div>
                      <h4><a href="" style="color: orange">Bimbingan Aqidah</a></h4>
                      <p>Bimbingan aqidah dan manhaj sesuai dengan jalan Rasulullah Sallallahu Alaihi Wassallam, dan para sahabatnya dan yang mengikuti mereka dengan baik</p>
                    </div>
                  </div>
      
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                      <div class="icon"><iconify-icon icon="mdi:religion-islamic" width="40" height="40"></iconify-icon></div>
                      <h4><a href="" style="color: green">Bimbingan Fiqih Ibadah</a></h4>
                      <p>Bimbingan tata cara beribadah yang baik dan benar sesuai dengan contoh dari Rasulullah Sallallahu Alaihi Wassallam</p>
                    </div>
                  </div>
      
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                      <div class="icon"><iconify-icon icon="ri:walk-fill" width="50" height="50"></iconify-icon></div>
                      <h4><a href="" style="color: lightseagreen">Bimbingan Akhlak dan Adab</a></h4>
                      <p>Pembinaan karakter dan budi pekerti serta adab sehari-hari yang sesuai dengan tuntutan Rasulullah Sallallahu Alaihi Wassallam dan norma yang berlaku di Masyarakat</p>
                    </div>
                  </div>
      
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                      <div class="icon"><iconify-icon icon="arcticons:quranic" width="50" height="50"></iconify-icon></div>
                      <h4><a href="" style="color: gray">Bimbingan Baca Kitab</a></h4>
                      <p>Keterampilan membaca kitab Arab sebagai penunjang meraih ilmu islam yang otentik dari sumbernya</p>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                      <div class="icon"><iconify-icon icon="ion:book-outline" width="40" height="40"></iconify-icon></div>
                      <h4><a href="" style="color: green">Tahsin Al-Qira'ah</a></h4>
                      <p>Perbaikan bacaan Al-Quran dengan kaidah tajwid yang tepat dan dibimbing langsung oleh guruyang berkompeten</p>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                      <div class="icon"><iconify-icon icon="iconoir:book-solid" width="40" height="40"></iconify-icon></div>
                      <h4><a href="" style="color: gray">Tahfizh Hadits</a></h4>
                      <p>Menghafal 42 hadits pilihan dari kitab Arba'in An-Nawawi serta mengkaji terjemahan dan faedahnya</p>
                    </div>
                  </div>
      
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                      <div class="icon"><iconify-icon icon="arcticons:al-quran-indonesia" width="40" height="40"></iconify-icon></div>
                      <h4><a href="" style="color: orange">Tahfizh Al-Qur'an</a></h4>
                      <p>Program menghafal Al-Qur'an dengan metode-metode ilmiah, target hafalan minimal 2,5 juz</p>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                      <div class="icon"><iconify-icon icon="carbon:book" width="40" height="40"></iconify-icon></div>
                      <h4><a href="" style="color: lightseagreen">Tahfizh Matan Ilmiyyah</a></h4>
                      <p>Mengkaji dan menghafal matan ilmiyyah yang berisi kaidah-kaidah sebagai acuan pembelajaran</p>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                      <div class="icon"><iconify-icon icon="streamline:programming-script-code-code-angle-programming-file-bracket" width="40" height="40"></iconify-icon></div>
                      <h4><a href="" style="color: lightseagreen">Programming</a></h4>
                      <p>Terampil membuat program (khusunya website) yang kini mempermudah aktifitas bisnis, perkantoran, dakwah dan lainnya.</p>
                    </div>
                  </div>
      
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                      <div class="icon"><iconify-icon icon="ri:kakao-talk-fill" width="40" height="40"></iconify-icon></div>
                      <h4><a href="" style="color: orange">Bahasa Asing</a></h4>
                      <p>Terampil bahasa Arab/Inggris dengan didukung lingkungan sekolah yang terbiasa berbahasa Arab/Inggris</p>
                    </div>
                  </div>
      
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                      <div class="icon"><iconify-icon icon="vaadin:shop" width="35" height="35"></iconify-icon></div>
                      <h4><a href="" style="color: green">Entrepreneurship</a></h4>
                      <p>Mengaplikasikan keterampilan yang dimiliki untuk membuat produk (barang/jasa) yang bermanfaat bagi masyarakat dan benilai jual.</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Program Unggulan -->

      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
              <h3>Penerimaan Peserta Didik Baru Tahun Ajaran 2024/2025</h3>
            <p>Persiapkan pendidikan yang berkualitas untuk masa depan yang lebih baik (Kuota Terbatas)</p> 
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="https://docs.google.com/forms/d/e/1FAIpQLSdrm7ZMBIbqCUdX1Kg5xmwdMj3jelMg9smU7v14hO8DNX35mg/viewform">Daftar</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Cta Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
              <div class="content">
                <h3><strong>Kurikulum Kejuruan (RPL)</strong></h3>
              </div>

              <div class="accordion-list">
                <ul>
                  <li>
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Semester 1<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                      <p>1. K3LH & Proses Bisnis RPL</p>
                      <P>2. Isu Terkini RPL di Era Industri 4.0</P>
                      <p>3. Job Profile & Technopreneurship</p>  
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Semester 2<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>1. Web statis (HTML, CSS, Java Script)</p>
                    <p>2. Dasar Pemrograman Web (PHP)</p>
                    <p>3. Pemrograman Berorientasi Objek</p> 
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>Semester 3<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>1. Pemodelan Perangkat Lunak #1 (UML)</p>
                    <p>2. Basis Data #1 (MySQL)</p>
                    <p>3. Web Frontend Framework (Bootstrap)</p>
                    <p>4. Sistem Kontrol Versi (Github)</p> 
                    </div>
                  </li>
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>04</span>Semester 4 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>1. Pemodelan Perangkat Lunak #2 (UML)</p>
                    <p>2. Basis Data #2 (MySQL)</p>
                    <p>3. Web Backend Framework (Laravel)</p>
                    <p>4. Prototipe Produk kreatif</p> 
                    </div>
                  </li>
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>05</span>Semester 5 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                      <p>1. Praktek Kerja Lapangan</p>
                    </div>
                  </li>
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>06</span>Semester 6 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                      <p>1. Sayembara Produk Kreatif + Proyek P5</p>
                      <p>2. Uji Kompetensi Keahlian</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url('assets/img/kurikulum/kurikulum.png')" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
          </div>
        </div>
      </section>
      <!-- End Why Us Section -->

           <!-- ======= Fasilitas Section ======= -->
           <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
              <div class="section-title">
                <h2>Fasilitas Sekolah</h2>
              </div>
    
              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/kurikulum pendidikan.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Kurikulum Pendidikan</h4>
                    <p>Terbaru</p>
                    <a href="assets/img/fasilitas/kurikulum pendidikan.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md -6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/sekolah.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Sekolah</h4>
                    <p>Bersih, Aman dan Nyaman</p>
                    <a href="assets/img/fasilitas/sekolah.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md -6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/ruang kelas.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Ruang Kelas</h4>
                    <p>Modern dan Full-AC</p>
                    <a href="assets/img/fasilitas/ruang kelas.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md -6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/lab ipa.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Laboratorium</h4>
                    <p>Laboratorium IPA</p>
                    <a href="assets/img/fasilitas/lab ipa.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md -6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/lab komputer.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Laboratorium</h4>
                    <p>Laboratorium Komputer dan Multimedia</p>
                    <a href="assets/img/fasilitas/lab komputer.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md -6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/perpus.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Perpustakaan</h4>
                    <p>Terpadu</p>
                    <a href="assets/img/fasilitas/perpus.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md -6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/wifi.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Akses Wi-Fi</h4>
                    <p>Jaringan Fiber Optic</p>
                    <a href="assets/img/fasilitas/wifi.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md -6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/proyektor.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Smart TV dan LCD Proyektor</h4>
                    <p>Terbaru</p>
                    <a href="assets/img/fasilitas/proyektor.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md -6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/kantin.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Kantin</h4>
                    <p>Bersih dan Sehat</p>
                    <a href="assets/img/fasilitas/kantin.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md -6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/mobil jemputan.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Mobil Jemputan</h4>
                    <p>By Request</p>
                    <a href="assets/img/fasilitas/mobil jemputan.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md -6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/asrama.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Tersedia Asrama</h4>
                    <p>By Request</p>
                    <a href="assets/img/fasilitas/asrama.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
                
                <div class="col-lg-4 col-md -6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/fasilitas/catering.png" class="img-fluid" alt="" /></div>
                  <div class="portfolio-info">
                    <h4>Catering Makan Siang</h4>
                    <p>By Request</p>
                    <a href="assets/img/fasilitas/catering.png" data-gallery="portfolioGallery" class="details-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
    
              </div>
            </div>
          </section>
          <!-- End Fasilitas Section -->

 <!-- ======= Target Lulusan ======= -->
 <section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Target Lulusan</h2>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="box">
          <h3>Lapangan Kerja IT</h3>
          <ul>
          <li><i class="bx bx-chevron-right"></i> Web (Backend) Programming</li>
          <li><i class="bx bx-chevron-right"></i> Web (Frontend) Programming</li>
          <li><i class="bx bx-chevron-right"></i> Mobile Application Programmer</li>
          <li><i class="bx bx-chevron-right"></i> Fullstack Freelance Programmer</li>  
          <li><i class="bx bx-chevron-right"></i> System Administrator</li>
          <li><i class="bx bx-chevron-right"></i> It Consultant</li>
        </ul>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
        <div class="box featured">
          <h3>Melanjutkan Kuliah</h3>
          <ul>
            <p>Dapat masuk ke semua jurusan IPA, IPS, Bahasa, Kejuruan, dll. (Merdeka Bertanggung Jawab)</p>
          </ul>
          </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
        <div class="box">
          <h3>Wirausaha</h3>
          <ul>
            <li><i class="bx bx-chevron-right"></i> Software Developer</li>
            <li><i class="bx bx-chevron-right"></i> Digital Startup Business</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Target Lulusan -->


      <!-- ======= Skills Section ======= -->
      <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/skills.png" class="img-fluid" alt=""/>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
              <h3>Mitra PKL Tahun 2023</h3>
              <ul>
                <li><i class="bx bx-chevron-right"></i> Kreasi Binar Indonesia (Bosowa)</li>
                <li><i class="bx bx-chevron-right"></i> Indonesia Logistics Community Service (Pelindo)</li>
                <li><i class="bx bx-chevron-right"></i> Produsen & Distributor Obat Hewan (Sadita)</li>
                <li><i class="bx bx-chevron-right"></i> Fakultas Ilmu Komputer UMI</li>
                <li><i class="bx bx-chevron-right"></i> Dinas Perhubungan</li>
                <li><i class="bx bx-chevron-right"></i> AirNav Indonesia</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End Skills Section -->

 
     
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa syarat pendaftaran di SMKIT Ibnul Qayyim Makassar?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                      1. Mengisi Formulir Online <br>
                      2. File Scan Akta Kelahiran <br>
                      3. File Scan KTP Ayah <br>
                      4. File Scan Kartu Keluarga <br>
                      5. File Pas Foto Berwarna (Ukuran 3 x 4)
                    </p>  
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Bagaimana Alur Pendaftaran di SMKIT Ibnul Qayyim Makassar? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    1. Membayar biaya pendaftaran sebesar <b>RP 350.000</b> via transfer <b>Bank BSI 7211 484 343</b> <br>
                     &nbsp; &nbsp; &nbsp; an. PPDB SMKIT Ibnul Qayyim Makassar <br>

                    2. Mengisi formulir online (Upload Berkas) <br>
                    3. Observasi anak & Wawancara orang tua <br>
                    4. Membayar biaya masuk <b>(Jika Lulus)</b> <br>
                    5. Tanda tangan MoU Orang Tua & Sekolah <br>
                    6. Resmi menjadi <b>Peserta Didik</b> 
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Kapan Waktu Pendaftaran Peserta Didik Baru di SMKIT Ibnul Qayyim Makassar? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  <b>Gelombang 1</b> <br>
                    20 November 2023 - 20 Februari 2024 <br>
                  <b>Gelombang 2</b> <br>
                    1 Maret - 21 April 2024 <br>
                  <b>Gelombang 3</b> <br>
                    10 April - 10 Mei 2024 <br> <br>
                    <b style="color: red;">Gelombang 2 & 3 dibuka ketika kuota belum tercukupi !!</b>
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Berapa Kuota Pendaftar yang akan diterima pada PPDB tahun 2024/2025 ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    <b>Kelas Ikhwan</b> 20 Siswa <br>
                    <b>Kelas Akhwat</b> 20 Siswa
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="500">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"
                  >Berapa biaya Pendidikan di SMKIT Ibnul Qayyim Makassar? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                   <b>Biaya Masuk</b> <b style="color: orange;">Rp 15.000.000</b> <br>
                   <b>Sudah Termasuk</b> <br>
                   1. Uang Pangkal <br>
                   2. BPP Bulan Pertama <br>
                   3. Seragam 4 Set <br>
                   4. Buku Cetak 1 Tahun <br>
                   5. Map Rapor <br> <br>
                   <b>Biaya BPP (Biaya Penyelenggara Pendidikan) <b style="color: orange;">Rp 800.000/Bulan</b></b> <br>
                   <b style="color: red;">Tidak ada kenaikan BPP bulanan dari awal sampai tamat sekolah</b> <br>
                   <b style="color: red;">Tidak ada biaya daftar ulang setiap naik kelas</b>
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- End Frequently Asked Questions Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact</h2>
          </div>
          

          <div class="row">
            <div class="col-md-6">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Lokasi:</h4>
                  <p>JL. Goa Ria, Taman Bunga 2 Sudiang, Kota Makassar Sulawesi Selatan</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>smkit@iqis.sch.id</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+62811-4411-432</p>
                </div>

                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.0658900460367!2d119.52621370821224!3d-5.093048894862525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefb98cf06e587%3A0xe048f9722d2bde85!2sSDIT%20Ibnul%20Qayyim%20Makassar!5e0!3m2!1sen!2sid!4v1702006211798!5m2!1sen!2sid"
                frameborder="0"
                  style="border: 0; width: 100%; height: 290px"
                  allowfullscreen
                ></iframe>
              </div>
            </div>

            <div class="col-md-6 mt-3">

            <form action="controller/crud.php" method="POST" role="form" >
              <div class="mb-3">
                <label for="exampleName1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleName1" name="nama" aria-describedby="emailHelp" />
              </div>
              <div class="mb-3">
                <label for="exampleEmail1" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="exampleEmail1" />
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else</div>
              </div>

              <div class="mb-3">
                <label for="exampleSubject1" class="form-label">Subject</label>
                <input type="text" class="form-control" id="exampleSubject1" name="subject" aria-describedby="emailHelp" />
              </div>
              <div class="form-floating">
                <textarea class="form-control mb-3" type="text" placeholder="Leave a Message here" name="pesan" id="floatingTextarea2" style="height: 270px"></textarea>
                <label for="floatingTextarea2">Leave a Message here</label>
              </div>
              <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary mb-3" style="background-color: #004225;">Submit</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

     <!-- ======= Footer ======= -->
     <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>SMKIT Ibnul Qayyim Makassar</h3>
              <p>
                JL. Goa Ria  <br />
                Taman Bunga 2 Sudiang<br />
                Kota Makassar Sulawesi Selatan <br /><br />
                <strong>Phone:</strong> +62811-4411-432<br />
                <strong>Email:</strong> smkit@iqis.sch.id<br />
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#services">Program</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#why-us">Kurikulum</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#pricing">Lulusan</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#skills">Mitra PKL</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Fasilitas</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>  
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Ekstrakulikuler</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> English Club</li>
                <li><i class="bx bx-chevron-right"></i> Leadership Camp</li>
                <li><i class="bx bx-chevron-right"></i> Robotic Club</li>
                <li><i class="bx bx-chevron-right"></i> Graphic Design Club</li>
                <li><i class="bx bx-chevron-right"></i> Futsal Club</li>
                <li><i class="bx bx-chevron-right"></i> Badminton Club</li>
                <li><i class="bx bx-chevron-right"></i> Archery Club</li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <div class="social-links mt-3">
                <a href="https://api.whatsapp.com/send?phone=6285394320535" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.facebook.com/SMKIT Ibnul Qayyim" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="http://instagram.com/smkitibnulqayyim" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="http://youtube.com/IQIS TV" class="google-plus"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>SMKIT Ibnul Qayyim</span></strong
          >. All Rights Reserved
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script> 
  </body>
</html>
