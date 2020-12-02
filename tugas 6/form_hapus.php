<?php
	include ('conn.php');
	if ($_SERVER['REQUEST_METHOD']=== 'GET') {


		$id_pendidikan=$_GET['id_pendidikan'];
		$sql_get= "DELETE FROM pendidikan WHERE id_pendidikan=$id_pendidikan";
		$res_get=mysqli_query(connection(),$sql_get);
		header("location:index.php");
		}
?>