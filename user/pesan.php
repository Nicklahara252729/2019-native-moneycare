<?php

include('koneksi.php');

/*if(empty($_SESSION['email'])){

?>
<script language="javascript">;alert('Anda Harus Login Terlebih dahulu');document.location="../index.php?page=login"</script>

<?php
}else{
$email=$_SESSION['email'];	
}*/

$sql=mysqli_query($koneksi,"select * from balas where kepada='yudhaandika16@gmail.com'");

$cek_pesan=mysqli_num_rows($sql);
?>
<!doctype html>
<html>
<head>
<title>Profile</title>
<style>
*{
margin:0;
padding:0;	
}
.body{
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
position:relative;
margin-left:10px;
margin-top:40px;
padding:30px;
display:inline-block;
border-radius:2px;	
width:90%;
height:auto;
box-shadow: 3px 3px 3px #C0BDBD; 
border-width:thin;
}

table{
font-family:times new roman;
font-size:18px;	
}

input[type=submit] {
     background-color: #263FFF;
		color:#fff;
		margin-right: 35px;
		margin-left: 35px;
		border: none;
		text-align: center;
		cursor: pointer;
		width: 120px;
		height: 30px;
		float:right;
    }
	input[type=text]{
    
    border: 2px solid silver;
    padding: 8px 0;
    border-width: 0 0 2px 0;
    width: 200px;
    margin-top: 15px;
		transition: border-color .3s;}
</style>
</head>

<body>
<?php if($cek_pesan>0)
			{
				while($isi_pesan=mysqli_fetch_array($sql)){
		?>
        <div class="body">
<b><h2>&nbsp; Pesan </h2></b><br>
Tanggal:<?php echo $isi_pesan['tanggal'];?><br>
Dari:<?php echo $isi_pesan['dari'];?>
<br>
Kepada: <?php echo $isi_pesan['kepada'];?>
<br>
<br>
Pesan:
<br>
<?php echo $isi_pesan['pesan'];?>
<br>
 </div>
        <?php
				}
		}else{
?>
<div class="body">
<b><h2>&nbsp; Pesan </h2></b>

 </div>
 <?php
		}
 ?>
</body>
</html>