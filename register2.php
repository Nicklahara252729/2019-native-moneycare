<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title> Login </title>
<style type="text/css">
	body{
		  background-color: #eee;
  margin-top: 50px;
  font-family: Verdana;
	}
	.body{
		 margin: auto;
  width: 400px;
  height: 320px;
  background-color: white;
  border-radius: 2px;
  box-shadow: 0px 3px 3px silver;
  padding: 25px;
	}
	h1 {
    margin: 0 0 20px 0; 
    font-weight: normal;
    color: #03a9f4;
    font-size: 30px;
  }
  
  label {
    float: left;
    padding: 10px 10px 14px 0;
    width: 175px;
    margin-top: 10px;
    clear: left;
  }
	
	input[type=submit] {
      border: 0;
      background-color: white;
      color: #03a9f4;
      text-transform: uppercase;
      width: auto;
      cursor: pointer;
		margin-left: 20px;
    }
	input {
    float: right;
    border: 2px solid silver;
    padding: 8px 0;
    border-width: 0 0 2px 0;
    width: 200px;
    margin-top: 15px;
		transition: border-color .3s;}
	.nb{
		margin: auto;
		position:relative;
	margin-top:20px;
	background-color:#FF0004;
	color:#FFFFFF;
	width:400px;
	height:50px auto;	
	padding:5px;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	}
	
	.error {
			font-size:small;
			color:red;
		}
	</style>
	
</head>

<body>
<center>
<br>
<br>
<br>
<br>
</center>
	<div class="body">
	
	<h1>Verifikasi Email</h1>
	<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
      
		
		<script type="text/javascript">
		$(document).ready(function() {
			$('#aksi').validate({
				rules: {
									
					cek: {
						equalTo: "#ganti"
					}
				},
				messages: {
					
					cek: {
						equalTo: "Password tidak sama"
					}
				}
			});
		});
		</script>
	<form action="user/periksa_login.php" name="aksi" id="aksi" method="post">
	<br>
	<label for="Email">Email : </label>
		<input type="text" name="email" id="email" placeholder="email" value="<?php echo $_SESSION['email']; ?>">
		<br>
		<br>
		<label for="password">Password &nbsp;: </label>
		<input type="text" name="pass" id="pass">
        <br>
		<br>
		<label for="change">Ganti Password : </label>
        <input type="password" name="ganti" id="ganti" class="required">
        <br>
        <br>
        <label for="confirm"> Confrim Password : </label>
        <input type="password" name="cek" id="cek" class="required">
	
	<br>
	<br>
		<input type="submit" value="Submit" name="submit" id="submit" >
		
				</from>
              
	</div>
<div class="nb">
              Kami telah Mengirim kan Password melalui email Anda
              </div>
</body>
</html>