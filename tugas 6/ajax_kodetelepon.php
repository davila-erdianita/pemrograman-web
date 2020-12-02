<?php
	include ('conn.php');

	if ($_SERVER['REQUEST_METHOD']=== 'GET') {
		if (isset($_GET['kategori_telepon'])){

	    $kategori_telepon=$_GET['kategori_telepon'];


		$sql= "SELECT * FROM kodetelepon WHERE kategori_telepon='$kategori_telepon'";
		$kodetelpon=mysqli_query(connection(),$sql);

		while ($data = mysqli_fetch_array($kodetelpon)) {
			echo "<option value='".$data['id_kodetelepon']."'>".$data['kode']."</option>";
		}
		
	}
}
?>