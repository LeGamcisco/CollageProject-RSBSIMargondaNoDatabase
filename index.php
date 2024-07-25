<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- TITLE -->
    <title>RS BSI Margonda | Home</title>

    <link rel="icon" href="icons/bsi.png" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />

    <!-- Native CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Script Alert -->
    <script type="text/javascript">
        function information() {
            alert("Selamat Datang di RS BSI Margonda. Selalu gunakan masker di tempat umum untuk melindungi diri Anda dan orang lain dari COVID-19")
        }
    </script>

</head>

<body onload="information()">
    <!-- NAVBAR START -->
    <?php include('include-navbar.php');?>
    <!-- NAVBAR END -->

    <!-- CAROUSEL START -->
    <div id="demo" class="carousel carousel-dark slide shadow-sm" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators mb-4 opacity-1">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner shadow">
            <div class="carousel-item active">
                <a href="page-artikel-berita/berita3.php">
                    <img src="img/carousel1.jpg" alt="error" class="d-block w-100 overlay-image" height="465px" />
                </a>
            </div>
            <div class="carousel-item">
                <img src="img/carousel2.jpg" alt="error" class="d-block w-100 overlay-image" height="465px" />
            </div>
            <div class="carousel-item">
                <img src="img/carousel3.png" alt="error" class="d-block w-100 overlay-image " height="465px" />
            </div>
        </div>
    </div>
    <!-- CAROUSEL END -->

    <!-- HEADER START -->
    <section id="section-opening">
        <div class="container text-center mt-5">
            <p>SELAMAT DATANG DI RUMAH SAKIT BSI MARGONDA</p>
            <h3>Standar Tertinggi dalam Pelayanan Kesehatan Nasional</h3>
        </div>
    </section>
    <!-- HEADER END -->

    <!-- CARD START-->
    <section id="section-layanan" class="mt-5 mb-5">
        <!-- Start Header Card -->
        <div class="container mb-2">
            <div class="row">
                <div class="col-6">
                    <h4>Spesialis Unggulan Kami:</h4>
                </div>
                <div class="col-6 text-end">
                    <a href="layanan-spesialis.php"
                        class="ntv-link link-success border border-success ntv-button p-1 pb-2 pe-2 ps-2">Lainnya<i
                        class="fa-solid fa-arrow-right ps-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Header Card -->

        <!-- Start Content Card -->
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-3 text-center text-md-start">
                <div class="col">
                    <div class="card h-100">
                        <img src="img/obgyn.png" class="card-img-top hover-img" height="190px" alt="Obygyn" />
                        <div class="card-body">
                            <a href="page-spesialis/spesialis-obgyn.php" class="ntv-link link-dark">
                                <h5 class="card-title ntv-text-hover">Obgyn</h5>
                            </a>
                            <p class="card-text ntv-webkit">
                                Obstetri dan Ginekologi (OBGYN) adalah cabang kedokteran yang berkaitan dengan kesehatan reproduksi wanita. 
                                Dokter OBGYN merawat pasien mulai dari masa remaja hingga usia dewasa, termasuk selama masa kehamilan, persalinan, dan pasca melahirkan.
                            </p>
                        </div>
                        <div class="text-center m-3">
                            <a class="link-success" href="page-spesialis/spesialis-obgyn.php">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/internis.png" class="card-img-top hover-img" height="190px" alt="Internis" />
                        <div class="card-body">
                            <a href="page-spesialis/spesialis-internis.php" class="ntv-link link-dark">
                                <h5 class="card-title ntv-text-hover">Internis</h5>
                            </a>
                            <p class="card-text ntv-webkit">
                                Internis adalah seorang dokter spesialis yang berfokus pada diagnosis, pengobatan, dan penanganan penyakit pada organ dalam tubuh manusia.
                            </p>
                        </div>
                        <div class="text-center m-3">
                            <a class="link-success" href="page-spesialis/spesialis-internis.php">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/pediatri.png" class="card-img-top hover-img" height="190px"
                            alt="Palm Springs Road" />
                        <div class="card-body">
                            <a href="page-spesialis/spesialis-pediatri.php" class="ntv-link link-dark">
                                <h5 class="card-title ntv-text-hover">Pediatri</h5>
                            </a>
                            <p class="card-text ntv-webkit">
                                Pediatri adalah dokter yang mengkhususkan diri dalam perawatan kesehatan anak-anak, mulai dari bayi baru lahir hingga masa remaja. 
                                Mereka memiliki pengetahuan yang mendalam tentang perkembangan fisik, sosial, dan emosional anak-anak.
                            </p>
                        </div>
                        <div class="text-center m-3">
                            <a class="link-success" href="page-spesialis/spesialis-pediatri.php">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/pulmonolog.png" class="card-img-top hover-img" height="190px"
                            alt="Palm Springs Road" />
                        <div class="card-body">
                            <a href="page-spesialis/spesialis-pulmonolog.php" class="ntv-link link-dark">
                                <h5 class="card-title ntv-text-hover">Pulmonologi</h5>
                            </a>
                            <p class="card-text ntv-webkit">
                                Pulmonolog adalah dokter spesialis yang berfokus pada penyakit paru-paru dan sistem pernapasan. 
                                Mereka mengobati kondisi seperti asma, bronkitis, penyakit paru obstruktif kronis (PPOK), fibrosis paru, dan pneumonia.
                            </p>
                        </div>
                        <div class="text-center m-3">
                            <a class="link-success" href="page-spesialis/spesialis-pulmonolog.php">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content Card -->
    </section>
    <!-- CARD END -->

    <!-- FASILITAS START -->
    <section id="fasilitas">
        <div class="container">
            <!-- Header Fasilitas End -->
            <div class="row row-cols-md-3 mb-3">
                <div class="col">
                    <h4>Fasilitas Kami:</h4>
                </div>
                <div class="col text-end">
                    <a href="layanan-fasilitas.php"
                        class="ntv-link link-success border border-success ntv-button p-1 pb-2 pe-3 ps-3">Selengkapnya
                        <i class="fa-solid fa-arrow-right ps-2"></i>
                    </a>
                </div>
            </div>

            <!-- Header Fasilitas End -->

            <!-- Content Fasilitas Start -->
            <div class="row row-cols-1 row-cols-md-3 d-flex ntv-text-justify">
                <div class="col">
                    <ul>
                        <li>
                            <p class="ntv-webkit"><b>Ruang Perawatan Pasien:</b> <br>Kami memiliki ruang perawatan
                                pasien yang nyaman dan dilengkapi dengan peralatan medis mutakhir. Ruang perawatan
                                dirancang untuk memberikan privasi dan kenyamanan kepada pasien, serta dilengkapi dengan
                                sistem pemantauan yang modern untuk memantau kondisi pasien secara real-time.</p>
                        </li>
                        <li>
                            <p class="ntv-webkit"><b>Unit Gawat Darurat (UGD):</b> <br>Unit Gawat Darurat kami
                                beroperasi 24 jam dan dilengkapi dengan peralatan medis yang canggih dan tim medis siap
                                tanggap. UGD kami dirancang untuk menangani keadaan darurat dan memberikan perawatan
                                segera kepada pasien yang membutuhkan.</p>
                        </li>
                        <li>
                            <p class="ntv-webkit"><b>Laboratorium:</b> <br>Kami memiliki laboratorium medis yang
                                dilengkapi dengan peralatan modern untuk mendukung proses diagnosis yang akurat.
                                Laboratorium kami mampu melakukan berbagai jenis tes laboratorium, termasuk tes darah,
                                urin, tes imunologi, dan tes genetik.</p>
                        </li>
                    </ul>
                </div>

                <div class="col">
                    <ul>
                        <li>
                            <p class="ntv-webkit"><b>Pusat Radiologi:</b> <br>Fasilitas radiologi kami mencakup berbagai
                                jenis pemeriksaan seperti sinar-X, CT scan, MRI, dan ultrasonografi. Peralatan radiologi
                                kami yang canggih membantu dokter dalam mendiagnosis penyakit dan mengawasi perkembangan
                                pasien.</p>
                        </li>
                        <li>
                            <p class="ntv-webkit"><b>Pusat Bedah:</b> <br>Kami memiliki ruang operasi modern dan
                                dilengkapi dengan peralatan bedah terkini. Tim bedah kami terdiri dari ahli bedah
                                berpengalaman yang menjalankan prosedur bedah dengan teknik yang mutakhir untuk
                                memastikan hasil yang optimal.</p>
                        </li>
                        <li>
                            <p class="ntv-webkit"><b>Poliklinik:</b> <br>Rumah Sakit BSI Margonda menyediakan poliklinik
                                dengan berbagai spesialisasi medis. Pasien dapat berkonsultasi dengan dokter spesialis
                                dalam bidang seperti kardiologi, ortopedi, gastroenterologi, neurologi, dan banyak lagi.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col d-none d-md-flex justify-content-center">
                    <img class="img-fluid h-100"
                        src="https://static.wixstatic.com/media/a826e6_c2aba487dea64ae6b30193faf774f130~mv2.png/v1/fill/w_313,h_356,al_c,lg_1,q_85,enc_auto/Asian-Medical-Student-Nurse-with-Stethoscope-Transparent-Image.png"
                        alt="facility">
                </div>
            </div>
        </div>
        <!-- Content Fasilitas End -->

        <!-- Footer Fasilitas Start -->
        <div class="container-fluid ntv-bg-color pt-3 pb-3 d-none d-md-flex">
            <div class="container d-flex text-center text-light">
                <div class="col-3">
                    <h5>1</h5>
                    <p>Terbaik Kota Depok</p>
                </div>
                <div class="col-3">
                    <h5>2.3 Juta</h5>
                    <p>Pasien di 2023</p>
                </div>
                <div class="col-3">
                    <h5>28 Ribu</h5>
                    <p>Operasi Ditangani</p>
                </div>
                <div class="col-3">
                    <h5>+16.3%</h5>
                    <p>Pertumbuhan Bisnis</p>
                </div>
            </div>
        </div>
        <!-- Footer Fasilitas End -->
    </section>
    <!-- FASILITAS END -->

    <!-- TENTANG KAMI START -->
    <section id="about">
        <div class="container-fluid bg-light p-4">
            <div class="container mt-5 mb-5">
                <div class="card mb-3 border-0">
                    <div class="row g-0 bg-light">
                        <div class="col-md-5">
                            <img src="img/tentang-kami.jpg" class="img-fluid" alt="..." />
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <a href="profil-tentang-kami.php" class="ntv-link link-dark">
                                    <h5 class="card-title ntv-text-hover">TENTANG KAMI</h5>
                                </a>
                                <p class="card-text ntv-text-justify ntv-webkit mb-4">
                                    Rumah Sakit BSI Margonda adalah sebuah fasilitas medis yang terletak di Jl. Margonda
                                    Raya, Depok, Jawa Barat, Indonesia. Sebagai salah satu rumah sakit terkemuka di
                                    wilayah tersebut, Rumah Sakit BSI
                                    Margonda memiliki komitmen yang kuat untuk menyediakan pelayanan kesehatan
                                    berkualitas tinggi kepada masyarakat. Dengan <a href="profil-visi-misi.php"
                                        class="link-success">visi dan misi</a> menjadi rumah sakit terdepan dalam
                                    memberikan layanan kesehatan terbaik dan
                                    inovatif, Rumah Sakit BSI Margonda terus berusaha untuk meningkatkan kualitas hidup
                                    pasien dengan mengutamakan keamanan dan kepuasan pasien sebagai prioritas utama.
                                </p>
                                <a href="profil-tentang-kami.php"
                                    class="ntv-link link-success border border-success ntv-button p-1 pb-2 pe-3 ps-3">Selengkapnya<i
                                        class="fa-solid fa-arrow-right ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TENTANG KAMI END -->
    
    <!-- TESTIMONI START -->
    <div class="container mt-5 mb-5">
        <!-- Start Header Card -->
        <div class="container mb-2">
            <div class="row">
                <div class="col-6">
                    <a href="testimoni.php" class="ntv-link ntv-text-hover link-dark">
                        <h3>Testimoni Pasien</h3>
                        <p>Beberapa pasien kami telah membagikan pengalamannya</p>
                    </a>
                </div>
                <div class="col-6 text-end align-self-center">
                    <a href="testimoni.php" class="ntv-link link-success border border-success ntv-button p-1 pb-2 pe-3 ps-3">
                        Lainnya<i class="fa-solid fa-arrow-right ps-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <!-- End Header Card -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center">
            <div class="col justify-content-center">
                <div class="card h-100">
                    <img src="img/testimoni/testimoni1.jpg" class="card-img-top" height="180px" alt="Testimoni">
                    <div class="card-body">
                        <p class="ntv-tgl-kecil">Minggu, 18-06-2023</p>
                        <a href="testimoni/testimoni1.php" class="ntv-link link-dark ntv-text-hover">
                            <h6 class="card-title">Kesembuhan dan Perhatian yang Luar Biasa di Rumah Sakit BSI Margonda: Testimoni Bapak Suparman</h6>
                        </a>
                    </div>
                    <div class="text-center m-3">
                        <a href="testimoni/testimoni1.php" class="link-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col justify-content-center">
                <div class="card h-100">
                    <img src="img/testimoni/testimoni2.jpg" class="card-img-top" height="180px" alt="Testimoni">
                    <div class="card-body">
                        <p class="ntv-tgl-kecil">Minggu, 18-06-2023</p>
                        <a href="testimoni/testimoni2.php" class="ntv-link link-dark ntv-text-hover">
                            <h6 class="card-title">Menginspirasi dengan Pengalaman Saya di Rumah Sakit BSI Margonda: Testimoni dari Ibu Susi</h6>
                        </a>
                    </div>
                    <div class="text-center m-3">
                        <a href="testimoni/testimoni2.php" class="link-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col justify-content-center">
                <div class="card h-100">
                    <img src="img/testimoni/testimoni3.jpg" class="card-img-top" height="180px" alt="Testimoni">
                    <div class="card-body">
                        <p class="ntv-tgl-kecil">Minggu, 18-06-2023</p>
                        <a href="testimoni/testimoni3.php" class="ntv-link link-dark ntv-text-hover">
                            <h6 class="card-title">Pengalaman Mengesankan dalam Kesembuhan di Rumah Sakit BSI Margonda: Testimoni Bapak Setiawan</h6>
                        </a>
                    </div>
                    <div class="text-center m-3">
                        <a href="testimoni/testimoni3.php" class="link-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONI END -->

    <!-- ARTIKEL DAN BERITA START -->
    <section id="artikel-dan-berita">
        <div class="container-fluid bg-light mt-5 mb-5 pt-5 pb-5">
            <div class="container">
                <div class="row row-cols-md-3 mb-3 justify-content-between">
                    <div class="col">
                        <a href="artikel-berita.php" class="ntv-link ntv-text-hover link-dark">
                            <h3>Berita & Artikel</h3>
                        </a>
                        <p>Ikuti Berita dan Artikel Terbaru Kami</p>
                    </div>
                    <div class="col text-end align-self-center">
                        <a href="artikel-berita.php"
                            class="ntv-link link-success border border-success ntv-button p-1 pb-2 pe-3 ps-3">
                            Lainnya<i class="fa-solid fa-arrow-right ps-2"></i></a>
                    </div>
                </div>

                <hr>
                <br>
                <div class="row row-cols-1 row-cols-md-2 g-3 ntv-text-justify">
                    <div class="col">
                        <div class="card h-100 mb-3">
                            <img src="img/artikel_berita/berita1.png" class="card-img-top hover-img" height="350px" alt="berita" />
                            <div class="card-body">
                                <p class="ntv-tgl-kecil">Selasa, 13-06-2023</p>
                                <a href="page-artikel-berita/berita1.php"
                                    class="ntv-link link-dark">
                                    <h5 class="card-title ntv-text-hover">Menteri BUMN (Badan Usaha Milik Negara) dan Rumah Sakit BSI Margonda: Kolaborasi dalam Peningkatan Layanan Kesehatan</h5>
                                </a>
                                <p class="card-text ntv-webkit">
                                    Dalam upaya untuk meningkatkan layanan kesehatan di Indonesia, Menteri BUMN Erick Thohir telah menjalin kerjasama dengan Rumah Sakit BSI Margonda. 
                                    Kolaborasi ini bertujuan untuk memperluas aksesibilitas, meningkatkan kualitas pelayanan, dan memperkenalkan inovasi dalam sektor kesehatan.
                                </p>
                                <a href="page-artikel-berita/berita1.php"
                                    class="link-success">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <p class="ntv-tgl-kecil">Kamis, 08-06-2023</p>
                                <a href="page-artikel-berita/artikel1.php"
                                    class="ntv-link link-dark">
                                    <h5 class="card-title ntv-text-hover">Tips Makanan Sehat untuk Si Kecil: Memastikan Pertumbuhan dan Kesehatan yang Optimal</h5>
                                </a>
                                <p class="card-text ntv-webkit">
                                    Memberikan makanan yang sehat dan bergizi merupakan hal penting dalam menjaga pertumbuhan dan kesehatan si kecil. 
                                    Nutrisi yang cukup dan seimbang berperan penting dalam mendukung perkembangan otak, tulang, dan sistem imun mereka.
                                </p>
                                <a href="page-artikel-berita/artikel1.php"class="link-success">Selengkapnya</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <p class="ntv-tgl-kecil">Senin, 29-05-2023</p>
                                <a href="page-artikel-berita/berita2.php"
                                    class="ntv-link link-dark">
                                    <h5 class="card-title ntv-text-hover">Rumah Sakit BSI Margonda Menjalin Kerjasama dengan Perusahaan Asuransi AXA Mandiri</h5>
                                </a>
                                <p class="card-text ntv-webkit">
                                    Rumah Sakit BSI Margonda, salah satu rumah sakit terkemuka yang berlokasi di Margonda, 
                                    dengan bangga mengumumkan kerjasama strategisnya dengan perusahaan asuransi ternama, AXA Mandiri.
                                </p>
                                <a href="page-artikel-berita/berita2.php"class="link-success">Selengkapnya</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p class="ntv-tgl-kecil">Kamis, 25-05-2023</p>
                                <a href="page-artikel-berita/berita3.php"
                                    class="ntv-link link-dark">
                                    <h5 class="card-title ntv-text-hover">Diskon 10% untuk Vaksin HPV di Rumah Sakit BSI Margonda, Harga Mulai dari Rp 846.000</h5>
                                </a>
                                <p class="card-text ntv-webkit">
                                    Rumah Sakit BSI Margonda mengumumkan program diskon 10% untuk vaksin HPV (Human Papillomavirus) sebagai upaya meningkatkan kesadaran dan perlindungan terhadap penyakit ini. 
                                    Dalam program ini, harga vaksin HPV akan mulai dari Rp 846.000 setelah mendapatkan diskon 10%. 
                                </p>
                                <a href="page-artikel-berita/berita3.php"class="link-success">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ARTIKEL DAN BERITA END-->

    <!-- CONTACT POSTION FIX-POSITION START -->
    <section id="icon-section">
        <div class="position-fixed top-50 end-0 text-center ntv-z-index" style="font-size: 12px">
            <a class="link-dark ntv-link mb-3 d-block ntv-text-hover border border-success bg-light p-1" href="daftar.php">
                <i class="fa-solid fa-bed fa-lg"></i>
                <br />
                <span><b> Daftar </b></span>
            </a>
            <a class="link-dark ntv-link mb-3 d-block ntv-text-hover border border-success bg-light p-1" target="_blank"
                href="https://www.whatsapp.com/?lang=id">
                <i class="fa-brands fa-whatsapp fa-lg"></i>
                <br />
                <span><b> Chat Kami </b></span>
            </a>
        </div>
    </section>
    <!-- CONTACT POSTION FIX-POSITION END -->
    

    <!-- TOP PAGE START -->
    <div class="position-fixed bottom-0 end-0 text-center ntv-z-index" style="font-size: 12px">
        <a class="link-dark ntv-link mb-3 d-block ntv-text-hover border border-success bg-light p-1" href="#">
            <i class="fa-solid fa-arrow-up fa-2xl ntv-text-hover"></i>
        </a>
    </div>
    <!-- TOP PAGE END -->
        

    <!-- IFRAME GOOGLE MAP START-->
    <section id="iframe">
        <div class="container mb-5 text-center">
            <a href="https://goo.gl/maps/8v6yijzRbz8F6hJh6" target="_blank" class="ntv-link ntv-text-hover link-dark">
                <h2>Lokasi</h2>
            </a>
            <div class="embed-responsive">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4749.717660662209!2d106.83118829804073!3d-6.356951522093347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec3c53dfed75%3A0xad5f6ba586fc5d5e!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Margonda%20(UBSI%20Margonda)!5e0!3m2!1sid!2sid!4v1686409331699!5m2!1sid!2sid"
                    class="w-100" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
    <!-- IFRAME GOOGLE MAP END -->

    <!-- FOOTER START -->
    <?php include('include-footer.php');?>
    <!-- FOOTER END -->

    <!-- BOOTSTRAP 5 SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>