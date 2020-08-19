<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="icon" type="image/png" href="<?= base_url('assets/login/'); ?>images/icons/favicon.ico" /> -->
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <meta http-equiv="refresh" content="900" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>baru/main.css">
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <!-- Latest compiled and minified CSS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4 bg-plum-plate" tabindex="-1">
                        <div id="carouselExampleControls2" class="carousel slide carousel" data-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Masjid Agung</h5>
                                        <p>Masjid yang juga kerap disebut Great Mosque of Kediri ini merupakan masjid termegah dan terbesar di Kediri.</p>
                                    </div>
                                    <img class="w-100" style="opacity: 0.4; width:100%; height: 100%; object-fit: cover; " src="<?= base_url('assets/baru/'); ?>assets/images/carousel_login/1.jpg" alt="First slide">
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Alun-Alun Kediri</h5>
                                        <p>Alun-alun Kediri dulunya berbentuk tanah gersang berumput serta bercokol patung warna emas ditengahnya yaitu patung Mayor Bismo.</p>
                                    </div>
                                    <img class="w-100" style="opacity: 0.4; width:100%; height: 100%; object-fit: cover; " src="<?= base_url('assets/baru/'); ?>assets/images/carousel_login/2.jpg" alt="Second slide">
                                </div>

                                <div class="carousel-item active">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Jembatan Brawijaya</h5>
                                        <p>Peresmian Jembatan Brawijaya bersamaan dengan ulang tahun yang ke-150 jembatan Brug Over Den Brantas te Kediri.</p>
                                    </div>
                                    <img class="w-100" style="opacity: 0.4; width:100%; height: 100%; object-fit: cover; " src="<?= base_url('assets/baru/'); ?>assets/images/carousel_login/3.jpg" alt="Third slide">
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Bundaran Sekartaji</h5>
                                        <p>Taman di Jalan Veteran ini merupakan taman yang dimintai warga kota dan hits di kalangan anak muda.</p>
                                    </div>
                                    <img class="w-100" style="opacity: 0.4; width:100%; height: 100%; object-fit: cover; " src="<?= base_url('assets/baru/'); ?>assets/images/carousel_login/4.jpg" alt="Fourth slide">
                                </div>
                                
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <img src="<?= base_url('assets/login/'); ?>images/icons/logo-inverse.png" class="mb-5" width="110">
                            <h4 class="mb-0">
                                <span class="d-block mb-2 fsize-2">Welcome back,</span>
                                <span class="fsize-2">Please sign in to your account.</span>
                            </h4>
                            <!-- <h6 class="mt-3">No account? <a href="javascript:void(0);" class="text-primary">Sign up now</a></h6> -->
                            <div class="divider row mb-4"></div>
                            <form class="" method="post" action="<?= base_url('auth'); ?>">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Username</label>
                                            <input type="text" id="user" name="user" placeholder="Username here..." class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword" class="">Password</label>
                                            <!-- <span class="btn-show-pass">
                                                    <i class="fa fa-eye"></i>
                                            </span> -->
                                            <input type="password" id="password" name="password" placeholder="Password here..." class="form-control ">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="ml-auto">
                                        <button class="btn btn-primary btn-lg" type="submit">Login to Dashboard</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="<?= base_url('./assets/'); ?>baru/assets/scripts/main.js"></script>