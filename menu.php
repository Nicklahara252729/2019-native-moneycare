
<html>
<head>
<title>Money Care</title>
<style type="text/css">
*{
	margin:0;
	
	padding:0;
}
body{ background-color: #eee;}
.icon{
	width:20px;
	height:20px;
	padding-left:30;
	
}
.header{
		height: 400px;
		width: 1200px;
		
			}
	.slideshow > .image {
  position: absolute;
		z-index: 10;
		margin-left:80px;
}
	.gambar{
		margin-top: 100px;
		position: relative;
		height: 400px;
		z-index: 1;
		width: 100%;
		
	}

	.masuk{
		background: url(icon/icon_cari.png);	
		background-repeat: no-repeat;
		border:none;
		width:30px;
		height:30px;
		cursor:pointer;
		background-size:100%;
	}

	.tesk{
		margin-top: 100px;
		margin-bottom:100px;
		font-size:36px;
		position:relative;
		text-align:center;
		
		
		
	}
	.kotak{
		border-style:solid;
		border-width:thin;
		margin-left:65px;
		font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
		font-size:19px;
		display:inline-block;
		width:300px;
		height:250px;
		text-align:center;
		padding:30px;
		background-color:#fff;
	}
	.aboutsatu{
		width:350px;
		height:150px;
		font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
		font-size:19px;
		display:inline-block;
		margin-top:35px;
		margin-left:65px;
		text-align:left;
		padding:30px;
		background:#1e3953;
		color:#FFFFFF;
	}

@media (max-width:768px){
	.aboutsatu{
	width:100%;
	height:auto;
	padding:20px;
	position:relative;	
	}
	
	.kotak{
		
		position:relative;
		margin-top:10px;
		margin-left:150px;
}

.gambar{
	width:100%;
	height: 200px;
			
}
.tesk{
	margin-top:300px;	
}
}
.footer{
	width:98%;
	height:auto;
	padding:10px;
	margin-top:10px;
	position:relative;
	
	
	
		font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
		font-size:19px;
		display:inline-block;
		text-align:left;
		padding:10px;
		background:#1e3953;
		color:#FFFFFF;
}
</style>
</head>
<body>

    <div class="gambar">
<div class="slideshow">
  <div class="image"><img class="header" src="icon/foto.jpg" width="640px"></div>
  <div class="image"><img class="header" src="icon/foto2.jpg" width="640px"></div>
   <div class="image"><img class="header" src="icon/foto3.jpg" width="640px"></div>
    <div class="image"><img class="header" src="icon/foto4.jpg" width="640px"></div>
     <div class="image"><img class="header" src="icon/foto5.jpg" width="640px"></div>
       <div class="image"><img class="header" src="icon/foto7.jpg" width="640px"></div>
      
</div>
	</div>
    <div class="tesk">
    
    BROKER TERBAIK INDONESIA
    
    </div>
    
    <div class="kotak">
    <img src="icon/berpengalaman.png"><br>
    <b>BERPENGALAMAN DAN TERPERCAYA</b><br>
    Berdiri sejak tahun 2004, dan berpengalaman lebih dari 13 tahun. Sudah lebih dari 50000 nasabah bergabung bersama kami.
    </div>
    <div class="kotak">
    <img src="icon/aman.png"><br>
    <b>DANA NASABAH TERJAMIN</b><br>
Dana Nasabah disetorkan ke rekening yang terpisah (segregated account) pada bank yang di tunjuk dan ditentukan oleh sang regulator di Indonesia BAPPEBTI.
    </div>
    <div class="kotak">
    <img src="icon/terjamin.png"><br>
    <b>DI JAMIN OLEH PEMERINTAH</b><br>
Member OF BAPPEBTI Nomor: 0002/BAPPEBTI/SP-PA/01/2018, Member of KLIRING BERJANGKA INDONESIA (KBI) Nomor : 25/AK KBI/VIII/2004,..
    </div>
    <div class="aboutsatu">
    <b>About Us</b><br><br>
Sejak berdiri di tahun 2004 hingga sekarang kepercayaan Nasabah kami meningkat dan sudah banyak nasabah bergabung bersama kami.
    </div>
    
    <div class="footer">

    Copyright © 2019 Money Care
    </div>
    </body>
    
    
</html>
<script src="js/slideshow.js"></script>
<script type="text/javascript">
$(".slideshow > div:gt(0)").hide();
setInterval(function() { 
    $('.slideshow > div:first')
        .fadeOut(1250)
        .next()
        .fadeIn(1250)
        .end()
        .appendTo('.slideshow');
    }, 3500);
			</script>
