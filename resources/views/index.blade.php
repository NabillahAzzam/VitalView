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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
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
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/bmi-calculator" class="nav-item nav-link">BMI</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Rekomendasi</a>
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
                    <h1 class="display-5 animated fadeIn mb-4">Welcome to Vital View!</h1> 
                    <p class="animated fadeIn mb-4 pb-2">Monitor your body's health with accurate BMI measurements, discover personalized 
                        workout recommendations, and explore a variety of healthy food options to help you achieve optimal balance. 
                        Start today for a fitness journey that's enjoyable and vibrant!"</p>
                    <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>

                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/home-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/home-3.jpeg" alt="">
                        </div>
                    </div>
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
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword" style="width: 100%;">
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


       
    
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
            
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">Resep Makanan</h1>
                        <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p>
                    </div>
                </div>
            </div>
        </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/rekomendasi-makanan-desc"><img class="img-fluid" src="img/bananagranola.jpeg" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div> -->
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <!-- <h5 class="text-primary mb-3">$12,345</h5> -->
                                        <a class="d-block h5 mb-2" href="/rekomendasi-makanan-desc">Banane Granola</a>
                                        <!-- <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p> -->
                                        <p>Jennie Kim</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>Breakfast</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>15 mins</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>25 likes</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/rekomendasi-makanan-desc"><img class="img-fluid" src="img/grewygranola.jpeg" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <!-- <h5 class="text-primary mb-3">$12,345</h5> -->
                                        <a class="d-block h5 mb-2" href="/rekomendasi-makanan-desc">Chewy Granola</a>
                                        <p>Kim Jisoo</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>Breakfast</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>20 Mins</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>20 likes</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/rekomendasi-makanan-desc"><img class="img-fluid" src="img/pancakesereal.jpeg" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <!-- <h5 class="text-primary mb-3">$12,345</h5> -->
                                        <a class="d-block h5 mb-2" href="/rekomendasi-makanan-desc">Vegan Pancake Sereal</a>
                                        <p>Jennie Kim</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>Breakfast</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>15 mins</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>15 likes</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/rekomendasi-makanan-desc"><img class="img-fluid" src="img/bananagranola.jpeg" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <!-- <h5 class="text-primary mb-3">$12,345</h5> -->
                                        <a class="d-block h5 mb-2" href="/rekomendasi-makanan-desc">Banane Granola</a>
                                        <p>Jennie Kim</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>Breakfast</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>15 mins</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>25 likes</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/rekomendasi-makanan-desc"><img class="img-fluid" src="img/grewygranola.jpeg" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <!-- <h5 class="text-primary mb-3">$12,345</h5> -->
                                        <a class="d-block h5 mb-2" href="/rekomendasi-makanan-desc">Chewy Granola</a>
                                        <p>Kim Jisoo</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>Breakfast</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>20 Mins</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>20 likes</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/rekomendasi-makanan-desc"><img class="img-fluid" src="img/pancakesereal.jpeg" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <!-- <h5 class="text-primary mb-3">$12,345</h5> -->
                                        <a class="d-block h5 mb-2" href="/rekomendasi-makanan-desc">Vegan Pancake Sereal</a>
                                        <p>Jennie Kim</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>Breakfast</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>15 mins</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>15 likes</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="/rekomendasi-makanan-home">Browse More</a>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- About End -->


                <!-- Excercises Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-0 gx-5 align-items-end">
                            <div class="col-lg-6">
                                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                    <h1 class="mb-3">Excercises</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p>
                                </div>
                            </div>
                                <div class="row g-4">
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <a href="/detail-workout" style="position: relative; display: block; width: 100%; height: 100%;">
                                                <div style="position: relative; width: 100%; height: 100%;">
                                                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); border-radius: 20px;"></div>
                                                    <img style="width: 100%; height: 100%; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;" src="img/workout-1.jpg" />
                                                    <div style="width: 364px; height: 68px; color: #00B98E; font-size: 23px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 10%; left: 10%; text-align: left;">Advanced Level</div>
                                                    <div style="width: 364px; max-width: 100%; height: 68px; color: #ffffff; font-size: 28px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 23%; left: 10%; text-align: left; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Big Chest Workout</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 60%; left: 10%; text-align: left;">Full Equipment</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 70%; left: 10%; text-align: left;">Strenght</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 80%; left: 10%; text-align: left;">Total time: 45 minutes</div>
                                                    <div class="bg-primary rounded text-white position-absolute bottom-0 end-0 m-4 py-1 px-3 fw-bold">Try</div>
                                                  </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <a href="/detail-workout" style="position: relative; display: block; width: 100%; height: 100%;">
                                                <div style="position: relative; width: 100%; height: 100%;">
                                                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); border-radius: 20px;"></div>
                                                    <img style="width: 100%; height: 100%; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;" src="img/workout-1.jpg" />
                                                    <div style="width: 364px; height: 68px; color: #00B98E; font-size: 23px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 10%; left: 10%; text-align: left;">Advanced Level</div>
                                                    <div style="width: 364px; max-width: 100%; height: 68px; color: #ffffff; font-size: 28px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 23%; left: 10%; text-align: left; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Big Chest Workout</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 60%; left: 10%; text-align: left;">Full Equipment</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 70%; left: 10%; text-align: left;">Strenght</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 80%; left: 10%; text-align: left;">Total time: 45 minutes</div>
                                                    <div class="bg-primary rounded text-white position-absolute bottom-0 end-0 m-4 py-1 px-3 fw-bold">Try</div>
                                                  </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <a href="/detail-workout" style="position: relative; display: block; width: 100%; height: 100%;">
                                                <div style="position: relative; width: 100%; height: 100%;">
                                                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); border-radius: 20px;"></div>
                                                    <img style="width: 100%; height: 100%; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;" src="img/workout-1.jpg" />
                                                    <div style="width: 364px; height: 68px; color: #00B98E; font-size: 23px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 10%; left: 10%; text-align: left;">Advanced Level</div>
                                                    <div style="width: 364px; max-width: 100%; height: 68px; color: #ffffff; font-size: 28px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 23%; left: 10%; text-align: left; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Big Chest Workout</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 60%; left: 10%; text-align: left;">Full Equipment</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 70%; left: 10%; text-align: left;">Strenght</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 80%; left: 10%; text-align: left;">Total time: 45 minutes</div>
                                                    <div class="bg-primary rounded text-white position-absolute bottom-0 end-0 m-4 py-1 px-3 fw-bold">Try</div>
                                                  </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <a href="/detail-workout" style="position: relative; display: block; width: 100%; height: 100%;">
                                                <div style="position: relative; width: 100%; height: 100%;">
                                                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); border-radius: 20px;"></div>
                                                    <img style="width: 100%; height: 100%; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;" src="img/workout-1.jpg" />
                                                    <div style="width: 364px; height: 68px; color: #00B98E; font-size: 23px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 10%; left: 10%; text-align: left;">Advanced Level</div>
                                                    <div style="width: 364px; max-width: 100%; height: 68px; color: #ffffff; font-size: 28px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 23%; left: 10%; text-align: left; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Big Chest Workout</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 60%; left: 10%; text-align: left;">Full Equipment</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 70%; left: 10%; text-align: left;">Strenght</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 80%; left: 10%; text-align: left;">Total time: 45 minutes</div>
                                                    <div class="bg-primary rounded text-white position-absolute bottom-0 end-0 m-4 py-1 px-3 fw-bold">Try</div>
                                                  </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <a href="/detail-workout" style="position: relative; display: block; width: 100%; height: 100%;">
                                                <div style="position: relative; width: 100%; height: 100%;">
                                                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); border-radius: 20px;"></div>
                                                    <img style="width: 100%; height: 100%; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;" src="img/workout-1.jpg" />
                                                    <div style="width: 364px; height: 68px; color: #00B98E; font-size: 23px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 10%; left: 10%; text-align: left;">Advanced Level</div>
                                                    <div style="width: 364px; max-width: 100%; height: 68px; color: #ffffff; font-size: 28px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 23%; left: 10%; text-align: left; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Big Chest Workout</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 60%; left: 10%; text-align: left;">Full Equipment</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 70%; left: 10%; text-align: left;">Strenght</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 80%; left: 10%; text-align: left;">Total time: 45 minutes</div>
                                                    <div class="bg-primary rounded text-white position-absolute bottom-0 end-0 m-4 py-1 px-3 fw-bold">Try</div>
                                                  </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <a href="/detail-workout" style="position: relative; display: block; width: 100%; height: 100%;">
                                                <div style="position: relative; width: 100%; height: 100%;">
                                                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); border-radius: 20px;"></div>
                                                    <img style="width: 100%; height: 100%; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;" src="img/workout-1.jpg" />
                                                    <div style="width: 364px; height: 68px; color: #00B98E; font-size: 23px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 10%; left: 10%; text-align: left;">Advanced Level</div>
                                                    <div style="width: 364px; max-width: 100%; height: 68px; color: #ffffff; font-size: 28px; font-family: Inter; font-weight: 800; word-wrap: break-word; position: absolute; top: 23%; left: 10%; text-align: left; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Big Chest Workout</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 60%; left: 10%; text-align: left;">Full Equipment</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 70%; left: 10%; text-align: left;">Strenght</div>
                                                    <div style="width: 364px; height: 68px; color: #ffffff; font-size: 18px; font-family: Inter; font-weight: lighter; word-wrap: break-word; position: absolute; top: 80%; left: 10%; text-align: left;">Total time: 45 minutes</div>
                                                    <div class="bg-primary rounded text-white position-absolute bottom-0 end-0 m-4 py-1 px-3 fw-bold">Try</div>
                                                  </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                        <a class="btn btn-primary py-3 px-5" href="/rekomendasi-workout-home">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Excercises End -->

  

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-5" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                                <h1 class="mb-4">Our Team</h1>
                                <p><strong>Meet Our Team Members</strong></p>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/azzam.jpg" alt="">
                                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Nabillah Azzam Luthfi Mahfudzi</h5>
                                            <small>Koordinator & Back End</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="team-item rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/nabila.png" alt="">
                                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Nabila Nur Fajri Adhia</h5>
                                            <small>Front End</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/tia.JPG" alt="">
                                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Fatiha Ramadhianti</h5>
                                            <small>Front End</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="team-item rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/ical.jpg" alt="">
                                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Muhammad Rafi Faisal</h5>
                                            <small>Back End</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="team-item rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/salma.JPG" alt="">
                                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Laela Salma Lathania</h5>
                                            <small>Product Manager & Data Entry</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="team-item rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/amala.jpg" alt="">
                                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Amala Zakira</h5>
                                            <small>Product Manager & Data Entry</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
    

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

    <!-- Javascript -->
    <script src="js/main.js"></script>
</body>

</html>