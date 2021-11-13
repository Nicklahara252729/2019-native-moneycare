<?php
	session_start();
	include('../user/koneksi.php');
		
	$nama= $_POST['nama'];
	$tentang=$_POST['tentang'];
	$kepada=$_POST['kepada'];
	$tanggal=date('d-m-y');
	
	$simpan=mysql_query("insert into balas set kepada='$kepada',dari='$nama',tanggal='$tanggal',pesan='$tentang'")or die("".mysql_error());
	
    if($simpan){
    
    ?>
  		<script language="javascript">alert('Pesan Terkirim');document.location="adm-Admin.php?page=deskripsi"</script>
        <?php    
	}else{
			?>
            <script language="javascript">alert('Gagal Mengirim deskripsi');history.back();</script>
            
<?php
}

?>
	