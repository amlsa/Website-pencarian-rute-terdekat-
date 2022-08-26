<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | JATIMPARK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url()?>/assets/images/favicon.ico">

		<!-- App css -->
		<link href="<?= base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="<?= base_url()?>/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="<?= base_url()?>/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
		<link href="<?= base_url()?>/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

		<!-- icons -->
		<link href="<?= base_url()?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <!-- <div class="auth-logo">
                                        <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="<?= base_url()?>/assets/images/logo-dark.png" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="<?= base_url()?>" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="<?= base_url()?>/assets/images/logo-light.png" alt="" height="22">
                                            </span>
                                        </a>
                                    </div> -->
                                    <p class="text-muted mb-4 mt-3">Masukan Username dan Password.</p>
                                </div>

                                <form action="<?= base_url('Auth/prosesLogin')?>" method="POST">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="text" id="username" name="username" required="" placeholder="Masukan username">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="Masukan password">
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            APLIKASI PENCARIAN RUTE TERPENDEK LOKASI WAHANA JATIMPARK 1 MENGGUNAKAN ALGORITMA A-STAR &copy; <script>document.write(new Date().getFullYear())</script> 
        </footer>

        <!-- Vendor js -->
        <script src="<?= base_url()?>/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url()?>/assets/js/app.min.js"></script>
        
    </body>
</html>
