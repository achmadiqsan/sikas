<?php 
$total_masuk = 0;
$jml = 0;
$jml_out = 0;
$total_keluar = 0;
$total = 0;

$sql=mysqli_query($con,"SELECT * FROM transaksi");
while ($data=mysqli_fetch_array($sql)) {
    $jml = $data['jumlah'];
    $total_masuk = $total_masuk+$jml;

    $jml_out = $data['keluar'];
    $total_keluar = $total_keluar+$jml_out;

    $total = $total_masuk-$total_keluar;
}

 ?>
<marquee>Selamat Datang Di Sistem Informasi Pengelolaan Kas Masjid Nurul - Iman</marquee>
<div class="row">
                    <div class="col-md-12">
                     <h2>Halaman Utama</h2>   
                        <h5>Pengelolaan Kas Masjid Nurul - Iman Gunung Jati</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="glyphicon glyphicon-floppy-save"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Rp. <?= number_format($total_masuk); ?>,-</p>
                    <p class="text-muted">Total Kas Masuk</p>
                </div>
             </div>
             </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="glyphicon glyphicon-floppy-open"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Rp. <?= number_format($total_keluar); ?>,-</p>
                    <p class="text-muted">Total Kas Keluar</p>
                </div>
             </div>
             </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="glyphicon glyphicon-floppy-disk"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Rp. <?= number_format($total); ?>,-</p>
                    <p class="text-muted">Saldo Akhir</p>
                </div>
             </div>
             </div>

            </div>