<?php
require_once('koneksi.php');

$nip_pemohon = mysqli_real_escape_string($con, $_REQUEST['nip_pemohon']);
$usulan_akun = mysqli_real_escape_string($con, $_REQUEST['usulan_akun']);
$unit_kerja = mysqli_real_escape_string($con, $_REQUEST['unit_kerja']);
$kuota = mysqli_real_escape_string($con, $_REQUEST['kuota']);
$alasan = mysqli_real_escape_string($con, $_REQUEST['alasan']);
$status_transaksi = "Menunggu Helpdesk";
// echo $nip_pemohon;
// echo $usulan_akun;

if($_POST){
    try {
       $sql = "INSERT INTO email (nip, unit_kerja, usulan_akun, tgl_transaksi, status_transaksi) VALUES ('$nip_pemohon', '$unit_kerja', '$usulan_akun', now(), '$status_transaksi')";
       if(!$con->query($sql)){
          echo $con->error;
          die();
        }
    } catch (Exception $e) {
      echo $e;
      die();
    }
    echo "<script>
         alert('Data berhasil di simpan');
         window.location.href='http://localhost/prakomxiv/dashboard';
         </script>";
}
?>


