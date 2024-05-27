<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Kas Keluar
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php 
                                    	$no = 1;
                                    	$total = 0;
                                    	$sql=mysqli_query($con,"SELECT * FROM transaksi WHERE jenis='Keluar'");
        								while ($data=mysqli_fetch_array($sql)) {
                                    	 ?>
                                        <tr class="odd gradeX">
                                        	<td><?= $no++; ?></td>
                                            <td><?= $data['kode']; ?></td>
            								<td><?= date('d F Y', strtotime($data['tgl'])); ?></td>
            								<td><?= $data['keterangan']; ?></td>
            								<td align="right"><?= number_format($data['keluar']).",-"; ?></td>
            								<td>
            									<a id="edit_data" data-toggle="modal" data-target="#edit" data-kode="<?= $data['kode'] ?>" data-ket="<?= $data['keterangan'] ?>" data-tgl="<?= $data['tgl'] ?>" data-jml="<?= $data['keluar'] ?>" href="#" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>

            									<a onclick="return confirm('Yakin Akan Menghapus Data Ini ??')" href="?page=keluar&aksi=hapus&kode=<?= $data['kode']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
            								</td>
                                        </tr>
                                        <?php 
                                        $total = $total+$data['keluar'];
                                    	}
                                    	 ?>
                                    </tbody>
	                                    <tr>
	                                    	<td colspan="4"><strong>Total Kas Keluar</strong></td>
	                                    	<td align="right"><strong><?= "Rp." .  number_format($total).",-"; ?></strong></td>	
	                                    </tr>
                                </table>
                            </div>
                            
                            <!--  Halaman Tambah-->
                        <div class="panel-body">
                            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                              Tambah Data
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Form Tambah Data</h4>
                                        </div>
                                        <div class="modal-body">

                                            <form role="form" method="post">

                                                <div class="form-group">
                                                    <label>Kode</label>
                                                    <input type="text" name="kode" class="form-control" placeholder="Input Kode">
                                                </div>

                                                <div class="form-group">
                                                    <label>Keterangan</label>
                                                    <textarea name="ket" class="form-control" rows="3" placeholder="Isi Keterangan"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input type="date" name="tgl" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input type="number" name="jml" class="form-control" placeholder="Input Jumlah">
                                                </div>

                                            <!-- </form> -->

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                     <!-- End Modals-->

                     <?php 
                        if (isset($_POST['simpan'])) {
                            $kode = $_POST['kode'];
                            $ket = $_POST['ket'];
                            $tgl = $_POST['tgl'];
                            $jml = $_POST['jml'];

                            $sql = "INSERT INTO transaksi (kode, keterangan, tgl, jumlah, jenis, keluar) VALUES ('$kode', '$ket', '$tgl', 0, 'Keluar', '$jml')";
                            $query = mysqli_query($con, $sql);
                            if ($query) {
                                echo "<script>alert('Data berhasil ditambahkan!');window.location.href='?page=keluar'</script>";
                            } else {
                                echo "Error : " . mysqli_error($con);
                            }
                        }
                      ?>

                      <!--  Akhir Halaman Tambah-->

                      <!--  Halaman Ubah -->
                      <div class="panel-body">
                            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
                                        </div>
                                        <div class="modal-body" id="modal_edit">

                                            <form role="form" method="post">

                                                <div class="form-group">
                                                    <label>Kode</label>
                                                    <input type="text" name="kode" class="form-control" placeholder="Input Kode" id="kode" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label>Keterangan</label>
                                                    <textarea name="ket" class="form-control" rows="3" placeholder="Isi Keterangan" id="ket"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input type="date" name="tgl" class="form-control" id="tgl">
                                                </div>

                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input type="number" name="jml" class="form-control" placeholder="Input Jumlah" id="jml">
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
                                        </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <script src="assets/js/jquery-1.10.2.js"></script>
                        <script type="text/javascript">
                            $(document).on("click", "#edit_data", function(){
                                var kode = $(this).data('kode');
                                var ket = $(this).data('ket');
                                var tgl = $(this).data('tgl');
                                var jml = $(this).data('jml');

                                $("#modal_edit #kode").val(kode);
                                $("#modal_edit #ket").val(ket);
                                $("#modal_edit #tgl").val(tgl);
                                $("#modal_edit #jml").val(jml);
                            })
                        </script>

                        <?php 
                            if (isset($_POST['ubah'])) {
                            $kode = $_POST['kode'];
                            $ket = $_POST['ket'];
                            $tgl = $_POST['tgl'];
                            $jml = $_POST['jml'];

                            $sql = "UPDATE `transaksi` SET `keterangan`='$ket',`tgl`='$tgl',`keluar`='$jml' WHERE `kode`='$kode'";
                            $query = mysqli_query($con, $sql);
                            if ($query) {
                                echo "<script>alert('Data berhasil diubah!');window.location.href='?page=keluar'</script>";
                            } else {
                                echo "Error : " . mysqli_error($con);
                            }
                        }   
                         ?>
                      <!--  Akhir Halaman Ubah -->

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>