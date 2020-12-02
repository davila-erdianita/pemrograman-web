<?php
	include ('conn.php');
	 		$query="SELECT*FROM jenjangpendidikan";
            $result=mysqli_query(connection(),$query);

	if ($_SERVER['REQUEST_METHOD']=== 'POST') {


		$id_pendidikan=$_POST['id_pendidikan'];
    $id_jenjang=$_POST['id_jenjang'];
    $id_pengguna=$_POST['id_pengguna'];
    $nama_institusi=$_POST['nama_institusi'];


		$sql= "INSERT INTO pendidikan (id_pendidikan, id_jenjang, id_pengguna, nama_institusi) VALUES ('$id_pendidikan','$id_jenjang','$id_pengguna','$nama_institusi')";
		$res=mysqli_query(connection(),$sql);
		//redirect ke index.php
		header("location:index.php");
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pendidikan</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>
      

<h1>Tambah riwayat pendidikan</h1>
	<form action="form_tambah.php" method="POST">
		Id pendidikan:<input type="text" name="id_pendidikan"><br>
    jenjang pendidikan: 
    <select name="id_jenjang">
      <option>----Pilih----</option> 
      <?php while ($data= mysqli_fetch_array($result)): ?>
      <option value="<?php echo $data['id_jenjang']?>"><?php echo $data['jenjang_pendidikan']?></option>
  <?php endwhile; ?>
    </select>
    <br>
    Id pengguna : <input type="text" name="id_pengguna"><br>
    Nama institusi: <input type="text" name="nama_institusi"><br>
		<input type="submit" name="submit" value="Simpan">
	</form>

</body>
</html>