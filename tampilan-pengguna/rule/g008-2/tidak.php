<?php
  $kode = "G008";

  include "../../../proses-login/koneksi.php";
  $hasil = mysqli_query($konek, "DELETE FROM temp_konsultasi WHERE temp_kode_gejala='$kode'");
  if(!$hasil){
      die ("Gagal Query..".mysqli_error($konek));
  }
  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../g012-4/g012-4.php">';
?>
