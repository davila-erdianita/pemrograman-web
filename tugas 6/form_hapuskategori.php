<?php
	include ('conn.php');
	if ($_SERVER['REQUEST_METHOD']=== 'GET') {


		$id_jenjang=$_GET['id_jenjang'];
		$sql_get= "DELETE FROM jenjangpendidikan WHERE id_jenjang=$id_jenjang";
		$res_get=mysqli_query(connection(),$sql_get);
		header("location:index.php");
		}
?>