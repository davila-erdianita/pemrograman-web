<?php
	include ('conn.php');
	if ($_SERVER['REQUEST_METHOD']=== 'POST') {


		$sku=$_POST['sku'];
		$id_kategori=$_POST['id_kategori'];
		$nama_barang=$_POST['nama_barang'];
		$jumlah_stok=$_POST['jumlah_stok'];
		$harga_satuan=$_POST['harga_satuan'];

		$sql= "INSERT INTO barang (sku, id_kategori, nama_barang, jumlah_stok, harga_satuan) VALUES ('$sku', '$id_kategori', '$nama_barang', '$jumlah_stok','$harga_satuan')";
		$res=mysqli_query(connection(),$sql);
		//redirect ke index.php
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS online-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
    
	<title>CREATE</title>
</head>
<body>
	 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info">
      <div class="container">    
      <a class="navbar-brand" href="#">Barokah Minimarket</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="<?php echo "index.php"; ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href=kategori.php>kategori</a>
          <a class="nav-link" href=filterHarga.php>filter harga</a>
        </div>
      </div>
      </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-4 ">Barokah Minimarket</h1>
  </div>
</div>
	<h1>Add Data</h1>
	<form action="form.php" method="POST">
		SKU 		: <input type="text" name="sku"><br>
		Id kategori : 
		<select name="id_kategori">
			<option>----Pilih----</option>
			<option value="1">minuman</option>
			<option value="2">makanan</option>
			<option value="3">peralatan mandi</option>
		</select>
		<br>
		Nama barang : <input type="text" name="nama_barang"><br>
		Jumlah stok : <input type="text" name="jumlah_stok"><br>
		Harga satuan: <input type="text" name="harga_satuan"><br>
		<input type="submit" name="submit" value="Simpan">
	</form>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>