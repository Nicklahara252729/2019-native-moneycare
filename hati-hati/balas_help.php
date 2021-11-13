<?php
/*if(empty($_SESSION['email'])){

?>
<script language="javascript">;document.location="../index.php?page=login"</script>

<?php
}else{
$email=$_SESSION['email'];	
}*/

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
	input[type=text]{
    
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
			$('#help').validate({
				rules: {
					nim : {
						
						minlength:10,
						maxlength:255
					}
				},
				messages: {
					nim: {
						minlength: "isi min 10 text",
						maxlength: "Text Mencapai Max"
					}
				}
			});
		});
		</script>
</head>

<body>
<div class="body">
<b><h2>&nbsp; Deskripsi</h2></b>
<br>
<form action="input_des.php" enctype="multipart/form-data" name="help" id="help" method="post">
<table>
	<tr>
		<td>Nama</td>
        <td>&nbsp;:&nbsp;</td>
        <td><input type="text" name="nama" id="nama" placeholder="Nama"></td>
    </tr>
    <tr>
		<td>Email</td>
        <td>&nbsp;:&nbsp;</td>
        <td><input type="text" name="kepada" id="kepada" placeholder="kepada"></td>
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
<input type="submit" name="submit" class="input" id="submit" value="Ok">
</form>
 </div>
</body>
</html>