<?php
	include ('conn.php');
	if ($_SERVER['REQUEST_METHOD']=== 'GET') {


		$sku=$_GET['sku'];
		$sql_get= "DELETE FROM barang WHERE sku=$sku";
		$res_get=mysqli_query(connection(),$sql_get);
		header("location:index.php");
		
	}
?>