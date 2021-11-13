<?php
/*if(empty($_SESSION['email'])){

?>
<script language="javascript">;document.location="../index.php?page=login"</script>

<?php
}else{
$email=$_SESSION['email'];	
}
*/

include('../user/koneksi.php');

if(isset($_POST['KataCari']))
{
	$Kirim=$_POST['submit'];
	$Cari=$_POST['KataCari'];	
}else{
	$Cari="";
}


	if($Cari)
	{
		$QueriCari=mysqli_query($koneksi,"SELECT * FROM login WHERE email Like '%%$Cari%%' or active Like '%%$Cari%%'  ORDER BY user_id ") or die("Query tampil gagal!".mysql_error());
		
	}
	else
	{
		$QueriCari=mysqli_query($koneksi,"SELECT * FROM login ") or die("Query tampil gagal!".mysql_error());
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
text-align:center;


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
	a{
		text-decoration:none;
		color:#FFFFFF;	
	}
	
	
	#popup {
width: 100%;
height: 100%;
position: fixed;
background: rgba(0,0,0,.7);
top: 0;
left: 0;
z-index: 9999;
visibility: hidden;
}

.window {
width: 400px;
height: 270px;
background: #fff;
border-radius: 10px;
position: relative;
padding: 10px;
box-shadow: 0 0 5px rgba(0,0,0,.4);
text-align: center;
margin: 15% auto;
}

.close-button {
width: 20px;
height: 20px;
background: #000;
border-radius: 50%;
border: 3px solid #fff;
display: block;
text-align: center;
color: #fff;
text-decoration: none;
position: absolute;
top: -10px;
right: -10px;
}

#popup:target {
visibility: visible;
}

.input {
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
</style>
</head>
<body>
<div class="body">
<b><h2>&nbsp; Data Akun</h2></b>
<br>
<table border=1>
	<tr>
		<th>Email</th>
        <th>Password</th>
        <th>Status Aktif </th>
        <th>Level</th> 
         <th colspan="2">Menu</th>
    </tr>
    <?php 
	if($Cari){
	while($data=mysql_fetch_array($QueriCari)){
	?>
    <tr>
    	<td><?php echo $data['email']; ?></td>
    	<td><?php echo $data['password']; ?></td>
		<td><?php echo $data['active']; ?></td>
        <td><?php echo $data['level']; ?></td>
        
        <td> 
         <div class="a"><a href="#popup">Non-aktif</a></div>
		
		<div id="popup">
			<div class="window">
				<a href="#" class="close-button" title="Close">X</a>
				<h1>Menon-aktifkan Akun Pengguna</h1>
				<form action="b_akun.php" name="non" id="non" method="post">
                <?php
				$_SESSION['user_id']=$data['user_id'];
				$_SESSION['email']=$data['email'];
				?>
                <table>
	<tr>
		<td>Nama</td>
        <td>&nbsp;:&nbsp;</td>
        <td><input type="text" name="nama" id="nama" placeholder="Nama"></td>
    </tr>
    
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
		<td>Deskripsi</td>
        <td>&nbsp;:&nbsp;</td>
        <td><textarea name="tentang" id="tentang" cols="30" rows="5"></textarea> </td>
    </tr>
</table>
<br>
<input type="submit" name="submit" class="input" id="submit" value="Kirim">

                </form>
			</div>
		</div></td>
        <td><a class="a1" href='a_akun.php?user_id=<?php echo $data['user_id'];?>'>aktif</a></td>
       
	</tr>
    <?php
	}
	}else{
	?>	
    
     
    <?php 
	$data_depo=mysqli_query($koneksi,"select * from login");
	while($data=mysqli_fetch_array($data_depo)){
	?>
    <tr>
    	<td><?php echo $data['email']; ?></td>
    	<td><?php echo $data['password']; ?></td>
		<td><?php echo $data['active']; ?></td>
        <td><?php echo $data['level']; ?></td>
        
         <td>
         
         <div class="a"><a href="#popup">Non-aktif</a></div>
		
		<div id="popup">
			<div class="window">
				<a href="#" class="close-button" title="Close">X</a>
				<h1>Menon-aktifkan Akun Pengguna</h1>
				<form action="b_akun.php" name="non" id="non" method="post">
                <?php
				$_SESSION['user_id']=$data['user_id'];
				$_SESSION['email']=$data['email'];
				?>
                <table>
	<tr>
		<td>Nama</td>
        <td>&nbsp;:&nbsp;</td>
        <td><input type="text" name="nama" id="nama" placeholder="Nama"></td>
    </tr>
    
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
		<td>Deskripsi</td>
        <td>&nbsp;:&nbsp;</td>
        <td><textarea name="tentang" id="tentang" cols="30" rows="5"></textarea> </td>
    </tr>
</table>
<br>
<input type="submit" name="submit" class="input" id="submit" value="Kirim">

                </form>
			</div>
		</div>
        
        </td>
        <td><a class="a1" href='a_akun.php?user_id=<?php echo $data['user_id'];?>'>aktif</a></td>
     </tr>  
    <?php
	}
	}
	?>	

</body>
</html>