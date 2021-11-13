<?php


if(empty($_SESSION['email'])){

?>
<script language="javascript">;alert('Anda Harus Login Terlebih dahulu');document.location="../index.php?page=login"</script>

<?php
}else{
$email=$_SESSION['email'];	
}
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
	input[type=text],input[type=password]{
    
    border: 2px solid silver;
    padding: 8px 0;
    border-width: 0 0 2px 0;
    width: 200px;
    margin-top: 15px;
		transition: border-color .3s;}
.error {
			font-size:small;
			color:red;
		}
		
</style>
 <script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('#depo').validate({
				rules: {
									
					cek: {
						equalTo: "#ganti"
					}
				},
				messages: {
					
					cek: {
						equalTo: "Password tidak sama"
					},
					Pass_lama:"*"
				}
			});
		});
		
		</script>
</head>
<body>
<div class="body">
<b><h2>&nbsp; Ganti Password</h2></b>
<br>
<form action="periksa_login.php" enctype="multipart/form-data" name="depo" id="depo" method="post">
<table>
	<tr>
		<td>Passoword Lama</td>
        <td>&nbsp;:&nbsp;</td>
        <td><input type="text" name="pass_lama" id="Pass_lama" placeholder="Password lama" class="required"></td>
    </tr>
    <tr>
		<td>Passoword Baru</td>
        <td>&nbsp;:&nbsp;</td>
        <td><input type="password" name="ganti" id="ganti" class="required"></td>
    </tr>
    <tr>
		<td>Passoword Confirm</td>
        <td>&nbsp;:&nbsp;</td>
        <td><input type="password" name="cek" id="cek" class="required"></td>
    </tr>
    
</table>
<input type="submit" name="submit" id="submit" value="Ok">
</form>
 </div>
</body>
</html>