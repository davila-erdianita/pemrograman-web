<?php
	include ('conn.php');
	if ($_SERVER['REQUEST_METHOD']=== 'POST') {


		$id_jenjang=$_POST['id_jenjang'];
		$jenjang_pendidikan=$_POST['jenjang_pendidikan'];


		$sql= "INSERT INTO jenjangpendidikan (id_jenjang, jenjang_pendidikan) VALUES ('$id_jenjang', '$jenjang_pendidikan')";
		$res=mysqli_query(connection(),$sql);
		//redirect ke index.php
		header("location:index.php");
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jenjang pendidikan</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
      

<h1>Add Category</h1>
	<form action="form_category.php" method="POST">
		Id jenjang		: <input type="text" name="id_jenjang"><br>
		Jenjang	pendidikan	: <input type="text" name="jenjang_pendidikan"><br>
		<input type="submit" name="submit" value="Simpan">
	</form>

	<table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Jenjang pendidikan</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            //menampilkan data
            $query="SELECT*FROM jenjangpendidikan";
            $result=mysqli_query(connection(),$query);
            ?>

            <?php while ($data= mysqli_fetch_array($result)): ?>
              <tr>
                <td><?php echo $data['id_jenjang']?></td>
                <td><?php echo $data['jenjang_pendidikan']?></td>
                <td>
                            <div class="text-center">
                                <a href="form_hapuskategori.php?id_jenjang=<?= $data['id_jenjang'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                            </div>
                        </td>
              </tr>
            <?php endwhile?> 
          </tbody>
        </table>
</body>
</html>