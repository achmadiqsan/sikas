<?php 

require_once "config/koneksi.php";

 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- SIKAS -> SISTEM INFORMASI KAS -->
    <title>SIKAS</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SIKAS</a> 
                <!-- SIKAS -> SISTEM INFORMASI KAS -->
            </div>
  <!-- <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div> -->
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
			
                    <li>
                        <a  href="?page=dashboard"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                    </li>

                    <li>
                        <a  href="?page=masuk"><i class="glyphicon glyphicon-floppy-save"></i> Kas Masuk</a>
                    </li>

                    <li>
                        <a  href="?page=keluar"><i class="glyphicon glyphicon-floppy-open"></i> Kas Keluar</a>
                    </li>

                    <li>
                        <a  href="?page=rekap"><i class="glyphicon glyphicon-th-list"></i> Rekapitulasi Kas</a>
                    </li>
                      
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                    <?php

                        $page = $_GET['page'] ?? null;
                        $aksi = $_GET['aksi'] ?? null;

                        if ($page == "masuk") {
                            if ($aksi == "") {
                                include 'page/kas_masuk/masuk.php';
                            } else if ($aksi == "hapus") {
                                include 'page/kas_masuk/hapus.php';
                            }
                        } else if ($page == "keluar") {
                            if ($aksi == "") {
                                include 'page/kas_keluar/keluar.php';
                            } else if ($aksi == "hapus") {
                                include 'page/kas_keluar/hapus.php';
                            }
                        } else if ($page == "rekap") {
                            if ($aksi == "") {
                                include 'page/kas_rekap/rekap.php';
                            }
                        } else if ($page == "dashboard" || $page == "") {
                            if ($aksi == "") {
                                include 'page/dashboard/dashboard.php';
                            }
                        }

                    ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
