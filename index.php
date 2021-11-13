<html>
<head>
<title>Money Care</title>
<style type="text/css">
*{
	margin:0;
	padding:0;
}
 nav{
	font-family:sans-serif;
	width:100%;
	font-size:20px;
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
padding:25px;
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
</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
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
	<li><a href="index.php?page=home">Home</a></li>
    <li><a href="index.php?page=login">Login</a>
    <li><a href="#">About Us</a>


	</ul>
</nav>

	
<?php
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	
		
		switch($page){
			case 'home' :
				include"menu.php";
				break;
		
			
			case 'login' :
				include "login.php";
				break;
				
				case 'status' ;
			include "status.php";
			break;
			
			case 'lupa_pass' ;
			include "user/lupa_pass.php";
			break;
			
				default;
				echo"<center><h1>Maaf Halaman ini tidak Ditemukan</h1><center>";
					break;
		}
		
		
	}
	?>
	

    </body>
</html>