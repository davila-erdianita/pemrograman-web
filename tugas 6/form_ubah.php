<?php
	include ('conn.php');
	if ($_SERVER['REQUEST_METHOD']=== 'POST') {


		$id_pendidikan=$_POST['id_pendidikan'];
		$id_jenjang=$_POST['id_jenjang'];
		$id_pengguna=$_POST['id_pengguna'];
		$nama_institusi=$_POST['nama_institusi'];
		

		$sql= "UPDATE pendidikan SET id_pendidikan='$id_pendidikan', id_jenjang='$id_jenjang', id_pengguna='$id_pengguna', nama_institusi='$nama_institusi' WHERE id_pendidikan='$id_pendidikan'";
		$res=mysqli_query(connection(),$sql);
		//redirect ke index.php
		header("location:index.php");
	}
	if ($_SERVER['REQUEST_METHOD']=== 'GET') {


		$id_pendidikan=$_GET['id_pendidikan'];
		$sql_get= "SELECT * FROM pendidikan WHERE id_pendidikan=$id_pendidikan";
		$res_get=mysqli_query(connection(),$sql_get);
		
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Update Data</h1>
	<form action="form_ubah.php" method="POST">
		<?php while($data = mysqli_fetch_array($res_get)): ?>
		<input type="hidden" name="id_pendidikan" value="<?php echo $data['id_pendidikan'] ?>"><br>
		jenjang pendidikan: 
		<select name="id_jenjang">
			<option>----Pilih----</option>
			<option value="1" <?php echo $data['id_jenjang'] =='1'? 'selected="selected"' : '' ?>>SD</option>
			<option value="2" <?php echo $data['id_jenjang'] =='2'? 'selected="selected"' : '' ?>>SMP</option>
			<option value="3" <?php echo $data['id_jenjang'] =='3'? 'selected="selected"' : '' ?>>SMA</option>
		</select>
		<br>
		Id pengguna : <input type="text" name="id_pengguna" value="<?php echo $data['id_pengguna'] ?>"><br>
		Nama institusi: <input type="text" name="nama_institusi" value="<?php echo $data['nama_institusi'] ?>"><br>
		<input type="submit" name="submit" value="Simpan">
		<?php endwhile ?>
	</form>
</body>
</html>