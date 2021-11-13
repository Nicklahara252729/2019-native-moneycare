<?php
	session_start();
	include('koneksi.php');
	
	$email=$_SESSION['email'];	
	$nama= $_POST['nama'];
	$tentang=$_POST['tentang'];
	
	$tanggal=date('d-m-y');
	
	$simpan=mysql_query("insert into bantuan set email='$email',nama='$nama',tanggal='$tanggal',deskripsi='$tentang'")or die("".mysql_error());
	
    if($simpan){
    
    ?>
  		<script language="javascript">alert('Keluhan Anda Sudah Kami Terima');document.location="index_user.php?page=bantuan_help"</script>
        <?php    
	}else{
			?>
            <script language="javascript">alert('Gagal Mengirim deskripsi');history.back();</script>
            
<?php
}

?>
	