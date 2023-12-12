<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vital View</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-vv.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">VitalView</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/bmi-calculator" class="nav-item nav-link">BMI</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link active dropdown-toggle"
                                data-bs-toggle="dropdown">Rekomendasi</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="/rekomendasi-makanan-home" class="dropdown-item">Rekomendasi Makanan</a>
                                <a href="/rekomendasi-workout-home" class="dropdown-item">Rekomendasi Workout</a>

                            </div>
                        </div>
                    </div>
                    <a href="/login" class="btn btn-primary px-3 d-none d-lg-flex">Masuk Akun</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Workout</h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/rekomendasi-workout-home">Rekomendasi</a></li>
                            <li class="breadcrumb-item"><a href="/detail-workout">Rekomendasi Workout</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Big Chest Workout</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/home-1.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-13">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword"
                                    style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Big Chest Workout</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3"
                                        style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-map-marker-alt text-primary"></i>
                                        </div>
                                        <span>Coach Rafi Faisal</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3"
                                        style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-envelope-open text-primary"></i>
                                        </div>
                                        <span>Simpan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3"
                                        style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-phone-alt text-primary"></i>
                                        </div>
                                        <span>Bagikan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <video width="560" height="315" controls>
                            <source src="path/to/your/video.mp4" type="video/mp4">
                            Maaf, browser Anda tidak mendukung tag video.
                        </video>
                        <button class="btn btn-primary py-3" type="submit" style="width: 560px;">Ambil Poin</button>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="font-weight-bold mb-6" style="margin-left: 20px;">Manfaat</h2>
                            <p style="text-align: justify; margin-left: 20px;">
                                Anda akan menambah otot dan menghilangkan lemak, membantu membakar lebih banyak kalori
                                bahkan saat istirahat. Manfaat ini dapat membantu Anda tampil dan merasa lebih baik,
                                sehingga dapat meningkatkan kepercayaan diri dan kesejahteraan Anda.
                            </p>
                            <h2 class="font-weight-bold mb-4" style="margin-left: 20px;">Langkah - Langkah</h2>
                            <ol class="font-weight-bold mb-4" style="margin-left: 20px;">
                                <li>Berbaringlah di bangku datar dengan kaki menekan ke lantai.</li>
                                <li>Tarik bahu Anda ke bawah dan ke belakang untuk menekannya ke bangku cadangan.</li>
                                <li>Pegang dua dumbel dengan telapak tangan menghadap ke depan dan ibu jari melingkari
                                    pegangannya.</li>
                                <li>Saat menarik napas, turunkan dumbel sedikit lebih lebar dari bagian tengah dada
                                    Anda, secara perlahan dan terkendali.</li>
                                <li>Sentuhkan dumbel ke dada Anda dengan lembut.</li>
                                <li>Saat menghembuskan napas, tekan lengan Anda ke atas, jaga siku sedikit ditekuk.</li>
                                <li>Posisikan dumbel tepat di bawah ketinggian mata.</li>
                                <li>Lakukan 2 hingga 3 set dengan 8 hingga 15 repetisi.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


 


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!--  Javascript -->
    <script src="js/main.js"></script>
</body>

</html>