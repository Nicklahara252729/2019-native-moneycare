<?php
include('koneksi.php');
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];

$aman=md5($pass);
$sql= mysql_query("select * from login where email='$user' && password='$aman'")or die("Username Dan Password anda salah".mysql_error());
	$num=mysql_num_rows($sql);
	$data=mysql_fetch_array($sql);



if($data['level']=="user"){
	$_SESSION['email'] = $_POST['user'];
	if($data['active']=="no"){
		?>
        
		<script language="javascript">;document.location="../index.php?page=status"</script>
        <?php
	}else{
	?>
	<script language="javascript">;document.location="index_user.php?page=profile"</script>
	<?php
	
	}
}elseif($data['level']=="admin"){
	$_SESSION['email'] = $_POST['user'];
	?>
	<script language="javascript">;document.location="../hati-hati/adm-Admin.php"</script>
	<?php
}

else{
	
if(isset($_SESSION['dead'])){

		if($_SESSION['dead']>2){
		include('tombol.php');
	}else{
	
	$_SESSION['dead']=$_SESSION['dead']+1;	
	?>
    
	<script language="javascript">;alert('Username Dan Password anda salah');history.back();</script>
	<?php
    }
		
	
}else{
	
	$_SESSION['dead']="1"	;
?>
	<script language="javascript">;alert('Username Dan Password anda salah');history.back();</script>
	
	<?php
}

	
}
?>