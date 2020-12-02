<?php
	include ('conn.php');
	 		$query="SELECT*FROM kategoritelepon";
            $result=mysqli_query(connection(),$query);

	if ($_SERVER['REQUEST_METHOD']=== 'POST') {


		$id_telepon=$_POST['id_telepon'];
	    $id_pengguna=$_POST['id_pengguna'];
	    $kategori_telepon=$_POST['kategori_telepon'];
	    $id_kodetelepon=$_POST['id_kodetelepon'];
	    $nomor=$_POST['nomor'];


		$sql= "INSERT INTO nomortelepon (id_telepon, id_pengguna, kategori_telepon, id_kodetelepon, nomor) VALUES ('$id_telepon','$id_pengguna','$kategori_telepon','$id_kodetelepon','$nomor')";
		$res=mysqli_query(connection(),$sql);
		//redirect ke index.php
		header("location:index.php");
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Telepon Menggunakan AJAX</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>
      

<h1>Tambah Telepon</h1>
	<form action="form_tambahtelepon.php" method="POST">
		<input type="hidden" name="id_pendidikan"><br>
		Id pengguna:<input type="text" name="id_pengguna"><br>

    Kategori Telepon: 
    <select id="kategori" name="kategori_telepon">
      <option value="">----Pilih----</option> 
      <?php while ($data= mysqli_fetch_array($result)): ?>
      <option value="<?php echo $data['kategori_telepon']?>"><?php echo $data['nama_kategori']?></option>
  <?php endwhile; ?>
    </select>
    <br>
    Kode Operator: 
    <select id="kode" name="id_kodetelepon">
      <option value="">----Pilih kategori telepon dahulu----</option> 
    </select>
    <span id="load_kode" style="display: none;">Loading kode operator....</span>
    <br>
    Nomor: <input type="text" name="nomor"><br>
		<input type="submit" name="submit" value="Simpan">
	</form>

</body>
</html>

<script type="text/javascript">
	 $(document).ready(function(){
	$("#kategori").on("change", function(){
		$("#load_kode").show();
		var kategori_telepon= $("#kategori").val();
		$.ajax({
			type: "GET",
			url:"ajax_kodetelepon.php?kategori_telepon=" + kategori_telepon,
			success: function(msg){
				$("#load_kode").hide();
				$('#kode').html(msg);
			}
		});
	});
	});
</script>