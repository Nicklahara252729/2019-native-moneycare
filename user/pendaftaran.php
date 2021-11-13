<?php
include('koneksi.php');

$user=$_POST['user'];
$pass=$_POST['pass'];
$nick=$_POST['nick'];
$no_tel=$_POST['no_tel'];
$email=$_POST['e-mail'];

$cek=mysql_query("select username from login where username='$user'");
$data_pelanggan=mysql_fetch_array($cek);
$dapat=mysql_num_rows($cek);
if($dapat>0){
	?>
    <script language="javascript">alert('Username sudah ada!! ');history.back();</script>
    <?php
}
else{
$aman=md5($pass);

$sql=mysql_query("insert into login set username='$user',password='$aman',nickname='$nick',no_tel='$no_tel',email='$email'");

if($sql){
	?>
	<script language="javascript">alert('Pendaftaran Berhasil');document.location="index_user.php"</script>
	<?php
}else{
	?>
	<script language="javascript">alert('Pendaftaran gagal');document.location="daftar.php"</script>
	<?php
}
}
?>