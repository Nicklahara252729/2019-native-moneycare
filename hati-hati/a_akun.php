<?php
include "../user/koneksi.php";
$id_user=$_GET['user_id'];
$hapus1=mysql_query("update login set active='yes' where user_id='$id_user'");



?>
<script language="javascript">document.location="adm-Admin.php?page=akun"</script>