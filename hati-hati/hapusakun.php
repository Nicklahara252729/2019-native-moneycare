<?php
include "../user/koneksi.php";
$id_bantu=$_GET['id_bantu'];
$hapus1=mysql_query("delete from bantuan where id_bantu='$id_bantu'");



?>
<script language="javascript">document.location="adm-Admin.php?page=keluhan"</script>