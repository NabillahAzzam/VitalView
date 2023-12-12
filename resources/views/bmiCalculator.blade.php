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
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/bmi-calculator" class="nav-item nav-link active">BMI</a>
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
                    <h1 class="display-5 animated fadeIn mb-4">BMI</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            
                            <li class="breadcrumb-item text-body active" aria-current="page">BMI</li>
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
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- BMI Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class=" mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;" style="padding: 35px;">
                    <h1 class="text-center mb-3">BMI Calculators</h1>
                    <p class="text-center mb-3">Determining your Body Mass Index with ease is made simpler through the BMI calculator integrated into the Health Pro plugin.</p>
                    
                    <div class="col-md-10">
                        <label for="space"></label>
                    </div>
                
                    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 40px;">
                        <div class="container">
                            <div class="row g-2">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="age"><strong>Age</strong></label>
                                        <input type="text" class="form-control border-0 py-3" placeholder="Enter your age in YR">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gender"><strong>Gender</strong></label>
                                        <select class="form-select border-0 py-3">
                                            <option selected>Select</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="space"></label>
                                    </div>
                                  
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="height"><strong>Height (In Foot and Inch or In cm)</strong></label>
                                        <input type="text" class="form-control border-0 py-3" placeholder="In Foot">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="height"></label>
                                        <input type="text" class="form-control border-0 py-3" placeholder="In Inch">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="space"></label>
                                    </div>
                                  
                                </div>
                
                                <div class="row">
                                    <div class="text-center col-md-12">
                                        <label for="or"><strong>Or</strong></label>
                                        <input type="text" class="form-control border-0 py-3" placeholder="In cm">
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="space"></label>
                                    </div>
                                  
                                </div>
                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="weight"><strong>Weight ( In KG or LBS )</strong></label>               
                                        <input type="text" class="form-control border-0 py-3" placeholder="In KG">
                                    </div>
                                    <div class="col-md-6">
                                        <label for=""></label>
                                        <input type="text" class="form-control border-0 py-3" placeholder="In LBS">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-10">
                                        <label for="space"></label>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="space"></label>
                                    </div>
                                  
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="space"></label>               
                                        
                                    </div>

                                    <div class="col-md-4">
                                        <a href="/calculation-page" class="btn btn-dark border-0 w-100 py-3 justify-content-center" role="button">Submit</a>
                                    </div>
                                </div>
                                
                
                            </div>
                            </div>
                        </div>
                    </div>            
          
        


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