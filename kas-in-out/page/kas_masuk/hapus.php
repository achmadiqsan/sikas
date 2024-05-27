<?php 
                            $kode = $_GET['kode'];

                            $sql = "DELETE FROM `transaksi` WHERE `kode`='$kode'";
                            $query = mysqli_query($con, $sql);
                            if ($query) {
                                echo "<script>alert('Data berhasil dihapus!');window.location.href='?page=masuk'</script>";
                            } else {
                                echo "Error : " . mysqli_error($con);
                            }
 ?>