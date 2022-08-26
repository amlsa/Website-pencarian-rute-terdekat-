<!DOCTYPE html>
<html lang="en">
    <head>
		<?php $this->load->view('inc/head')?>

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <?php $this->load->view('inc/topbar')?>

            <!-- ========== Left Sidebar Start ========== -->
        	<?php $this->load->view('inc/menu');?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title"><?= $title?></h4>
                                    <h5><?= $desc?></h5>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                    </div> <!-- container -->

                </div> <!-- content -->

               <?php $this->load->view('inc/footer')?>

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Vendor js -->
        <script src="<?= base_url()?>/assets/js/vendor.min.js"></script>
        <!-- App js-->
        <script src="<?= base_url()?>/assets/js/app.min.js"></script>
        
    </body>
</html>