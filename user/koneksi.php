<?php
$host="localhost";
$username="root";
$password="satusampe250599";
$databasename="2019_web_native_moneycare";
//membuat koneksi ke web server
$koneksi=mysqli_connect($host,$username,$password) or die("Koneksi ke web server gagal!".mysql_error());
//membuat koneksi ke database ke
mysqli_select_db($koneksi,$databasename)or die("Koneksi ke database latihan gagal!".mysql_error());
?>