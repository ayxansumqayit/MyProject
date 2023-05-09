<?php $this->load->view('user/includes/headerStyle') ?>
<?php $this->load->view('user/includes/spinnerStyle') ?>
<?php $this->load->view('user/includes/navbarStyle') ?>



        <style>
            .btn:focus{
            outline: none!important;
            border:none!important;
            box-shadow: none!important;}
        </style>


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div style="color: #D7B56D !important"  class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Yüklənir...</span>
        </div>
    </div>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <!-- <h1 class="mb-0 text-primary text-uppercase">XL-BARBERSHOP</h1> -->
            <img style="width: 90px; height: 90px !important" src="img/image-07-08-22-10-34.png">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link ">Ana səhifə</a>
                <a href="about.html" class="nav-item nav-link">Haqqımızda</a>
                <a href="service.html" class="nav-item nav-link">Xidmətlər</a>
              <!--   <a href="price.html" class="nav-item nav-link">Qiymətlər</a> -->
              <!--   <a href="team.html" class="nav-item nav-link">Ustalar</a> -->
                <a href="gallery.html" class="nav-item nav-link">Qalereya</a>
                <a href="contact.html" class="nav-item nav-link active">Əlaqə</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="mb-3">Əlaqə</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Ana səhifə</a></li>
                    <li style="color: #D7B56D !important" class="breadcrumb-item text-primary active" aria-current="page">Əlaqə</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
<h2 style="color: #D7B56D !important">Biz elə də uzaq  deyilik!</h2>
</div>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                          <iframe class="google-map w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97258.77327201498!2d49.75888725565705!3d40.379230465844536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307dbd609a831f%3A0x40186b7c963475ca!2zMTQ1IE11cnR1emEgTXV4dGFyb3YsIEJha8SxIDEwMDksINCQ0LfQtdGA0LHQsNC50LTQttCw0L0!5e0!3m2!1sru!2s!4v1660018712167!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-4">Əlaqə saxlayın</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span style="color: #D7B56D !important" class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>Bakı şəh.,, Nizami ray., M. Muxtarova küç 145, Nizami M/S arxası</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span style="color: #D7B56D !important" class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>+99455 329 47 37</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span style="color: #D7B56D !important" class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>ibrahimagaaliyev@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-4">Sürətli bağlantılar</h4>
                    <a class="btn btn-link" href="about.html">Haqqında</a>
                    <a class="btn btn-link" href="contact.html">Əlaqə</a>
                    <a class="btn btn-link" href="service.html">Xidmətlər</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-4">Xəbər bülleteni</h4>
                    <div class="position-relative mb-4">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button  type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Qeydiyyatdan keçmək</button>
                    </div>
                    <div class="d-flex pt-1 m-n1">
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i style="color: #D7B56D !important" class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="https://www.youtube.com/channel/UCI2uZseSfDPpzY2N5Pi1DeA"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="https://www.instagram.com/xl.barbershop/?hl=de"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center text-md-center mb-3 mb-md-0">
                       &copy; XL Barbershop 2022
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i style="color: black !important;" class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>