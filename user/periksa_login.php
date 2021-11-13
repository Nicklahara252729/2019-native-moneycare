<?php
include('koneksi.php');
session_start();
$pas_lama=$_POST['pass_lama'];
$ganti=$_POST['cek'];

$cek_aman=md5($pas_lama);
$ganti_aman=md5($ganti);
$sql= mysql_query("select * from login where password='$cek_aman'")or die("error:".mysql_error());
	$num=mysql_num_rows($sql);
	$data=mysql_fetch_array($sql);

if($num>0){
	
	$update=mysql_query("update login set password='$ganti_aman' where password='$cek_aman'");
	
	include('logout.php');
}

else{
	?>
	<script language="javascript">;alert('Gagal Mengganti Password');history.back();</script>
	<?php
}
?>