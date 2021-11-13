<?php
include('../user/koneksi.php');
/*
if(empty($_SESSION['email'])){

?>
<script language="javascript">;document.location="../index.php?page=login"</script>

<?php
}else{
$email=$_SESSION['email'];	
}*/




if(isset($_POST['KataCari']))
{
	$Kirim=$_POST['submit'];
	$Cari=$_POST['KataCari'];	
}else{
	$Cari="";
}

	if($Cari)
	{
		$QueriCari=mysqli_query($koneksi,"SELECT * FROM deposit WHERE email Like '%%$Cari%%' or nama Like '%%$Cari%%' or tgl_depo Like '%%$Cari%%' or nominal Like '%%$Cari%%' '%%$Cari%%' ORDER BY id_depo ") or die("Query tampil gagal!".mysql_error());
		
	}
	else
	{
		$QueriCari=mysqli_query($koneksi,"SELECT * FROM deposit ") or die("Query tampil gagal!".mysql_error());
	}
	
?>
<!doctype html>
<html>
<head>
<title>Pelanggan</title>
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
position:relative;


}

img{
	width:50px;
	height:50px;	
}

.a{
		font-family: sans-serif;
 		color: #fff;
		background: #FF0004;
		padding: 5px;
		border-radius: 2px;
		text-decoration: none;
	}
	.a1{
		
		font-family: sans-serif;
 		color: #fff;
		background: #508AFF;
		padding: 5px;
		border-radius: 2px;
		text-decoration: none;
	
	}
</style>
</head>

<body>
<div class="body">
<b><h2>&nbsp; Data Deposit</h2></b>
<br>
<table border=1>
	<tr>
		<th>Email</th>
        <th>Nama</th>
        <th>Tanggal Deposit</th>
        <th>Nominal</th>
         <th>Bukti</th> 
         <th>Menu</th>
    </tr>
    <?php 
	if($Cari){
	while($data=mysqli_fetch_array($QueriCari)){
	?>
    <tr>
    	<td><?php echo $data['email']; ?></td>
    	<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['tgl_depo']; ?></td>
        <td>Rp <?php echo $data['nominal']; ?></td>
        <td>
        <a href="../FotoStruk/<?php echo $data['F_Struk']; ?>">
        <img src="../FotoStruk/<?php echo $data['F_Struk']; ?>">
        </a>
        </td>
        
        <td><a class="a" href='hapus_deposit.php?id_depo=<?php echo $data['id_depo'];?>'>Hapus</a></td>
	</tr>
    <?php
	}
	}
	?>	
    
     
    <?php 
	$data_depo=mysqli_query($koneksi,"select * from deposit");
	while($data=mysqli_fetch_array($data_depo)){
	?>
    <tr>
    	<td><?php echo $data['email']; ?></td>
    	<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['tgl_depo']; ?></td>
        <td>Rp <?php echo $data['nominal']; ?></td>
        <td><a href="../FotoStruk/<?php echo $data['F_Struk']; ?>">
        <img src="../FotoStruk/<?php echo $data['F_Struk']; ?>">
        </a></td>
        
        <td><a class="a" href='hapus_deposit.php?id_depo=<?php echo $data['id_depo'];?>'>Hapus</a></td>
	</tr>
    <?php
	}
	?>	

</body>
</html>