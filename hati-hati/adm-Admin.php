<?php
/*session_start();

if(empty($_SESSION['email'])){

?>
<script language="javascript">;document.location="../index.php?page=login"</script>

<?php
}else{
$email=$_SESSION['email'];	
}*/
error_reporting(0);

?>
<html>
<head>
<title>Menu ADmin</title>
<style type="text/css">
*{
	margin:0;
	padding:0;
}
 nav{
	font-family:sans-serif;
	width:100%;
	background-color:#7E7C7C;
 }
ul{
margin: 0 auto;
width:80%;
padding:0;	
}

ul li{
list-style:none;
display:inline-block;	
padding:20px;
}

ul li:hover{
	background-color:#58D6FC;
	cursor:pointer;	
}

ul li a{
text-decoration:none;
color:#fff;	
}
.toggle{
	width:100%;
padding:10px 20px;
background:#5F5E5E;	
text-align:right;
box-sizing:border-box;
font-size:30px;
color:#fff;
display:none;
}
@media (max-width:768px){
	.toggle{
	display:block;	
	}
	ul{
		width:100%;	
		display:none;
	}
	ul li{
		display:block;
		text-align:center;	
	}
	.active{
	display:block;	
	}
}

.masuk{
	background:url(../icon/icon_cari.png);	
		background-repeat: no-repeat;
		border:none;
		width:30px;
		height:30px;
		cursor:pointer;
		background-size:100%;
		}
		
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script type="text/javascript" src="../js/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
$('.menu').click(function(){
$('ul').toggleClass('active');	
		
})
})
</script>
</head>
<body>
<nav>
<div class="toggle">
<div class="menu">
<i class="fa fa-bars" aria-hidden="true"></i>
</div>
</div>


	<ul>
    

	<li><a href="adm-Admin.php?page=pelanggan">Pelanggan</a></li>
    <li><a href="adm-Admin.php?page=deposit">Deposit</a>
    <li><a href="adm-Admin.php?page=deskripsi">Deskripsi</a>
    <li><a href="adm-Admin.php?page=akun">Akun</a>
    <li><a href="adm-Admin.php?page=tambah_adm">Buat Akun Adm</a>
    <li><a href="adm-Admin.php?page=keluhan">Keluhan</a>
    
    <li><a href="logout.php">Logout</a>
<li>
    
   <form method="post">
	<input type="text" name="KataCari" id="KataCari" placeholder="Cari">
    <input type="submit" name="submit" id="submit" class="masuk" value="">
   </form>
   
	</ul>
</nav>

	
<?php
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	
		
		switch($page){
			case 'pelanggan' :
				include"pelanggan.php";
				break;
		
			
			case 'deposit' :
				include "deposit.php";
				break;
				
				case 'bantuan_help' :
				include "bantuan_help.php";
				break;
				
				case 'tambah_adm' :
				include "tambah_adm.php";
				break;
				
				case 'keluhan' :
				include "keluhan.php";
				break;
				
				case 'deskripsi' :
				include "balas_help.php";
				break;
				
				case 'akun' :
				include "akun.php";
				break;
				
				
				echo"<center><h1>Maaf Halaman ini tidak Ditemukan</h1><center>";
					break;
		}
		
		
	}
	?>
	

    </body>
</html>