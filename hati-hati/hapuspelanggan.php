<?php
include "../user/koneksi.php";
$nik=$_GET['nik'];

$cari_gambar=mysql_query("select * from daftar where nik='$nik'");
$gambar_dapar=mysql_fetch_array($cari_gambar);
$gambar_rekening=$gambar_dapar['Frek'];
$gambar_ktp=$gambar_dapar['Fktp'];
$email=$gambar_dapar['email'];

$target_rekening="../FotoTabungan/$gambar_rekening";
$target_ktp="../FotoKTP/$gambar_ktp";

unlink($target_rekening);
unlink($target_ktp);

$hapus=mysql_query("delete from login where email='$email'");
$hapus1=mysql_query("delete from daftar where nik='$nik'");



?>
<script language="javascript">document.location="adm-Admin.php?page=pelanggan"</script>