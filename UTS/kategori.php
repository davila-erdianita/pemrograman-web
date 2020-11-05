<?php
include('conn.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS online-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
    


    <title></title>
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
          <a class="nav-link" href="<?php echo "index.php"; ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link active" href=kategori.php>kategori</a>
          <a class="nav-link" href=filterHarga.php>filter harga</a>
        </div>
      </div>
      </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-4 ">Barokah Minimarket</h1>
    <p class="lead">Selamat Datang di investarisasi stok Barokah Minimarket</p>
  </div>
</div>


<div class="container text-center">
      <a href="form.php">Tambah data</a>
    </div>

  <div class="container">
  <div class="row">
    <div class="col">
          <h2 style="margin: 30px 0 30px 0;">Minuman</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>SKU</th>
                  <th>Kategori</th>
                  <th>Nama barang</th>
                  <th>jumlah stok</th>
                  <th>Harga satuan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                //menampilkan data berdasarkan id kategori=1 yaitu minuman
                  $query = "SELECT * FROM barang WHERE id_kategori=1";
                  $result = mysqli_query(connection(),$query);
                  $no=1;

                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['sku'];  ?></td>
                    <td>
                      <?php

                          if ($data['id_kategori'] == '1'){
                            echo "minuman";
                          }
                          elseif($data['id_kategori']== '2'){
                            echo "makanan";
                          }
                          else{
                            echo "peralatan mandi";
                          }

                      ?>

                    </td>
                    <td><?php echo $data['nama_barang'];  ?></td>
                    <td><?php echo $data['jumlah_stok'];  ?></td>
                    <td><?php echo $data['harga_satuan'];  ?></td>
                    <td>
                      <a href="update.php?sku=<?php echo $data['sku'] ?>" class="btn btn-outline-warning btn-sm" > Update</a>
                      <a href="delete.php?sku=<?php echo $data['sku'] ?>"class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>



<div class="col">
          <h2 style="margin: 30px 0 30px 0;">Makanan</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>SKU</th>
                  <th>Kategori</th>
                  <th>Nama barang</th>
                  <th>jumlah stok</th>
                  <th>Harga satuan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //menampilkan data berdasarkan id kategori=2 yaitu makanan
                  $query = "SELECT * FROM barang WHERE id_kategori=2";
                  $result = mysqli_query(connection(),$query);
                  $no=1;

                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['sku'];  ?></td>
                    <td>
                      <?php

                          if ($data['id_kategori'] == '1'){
                            echo "minuman";
                          }
                          elseif($data['id_kategori']== '2'){
                            echo "makanan";
                          }
                          else{
                            echo "peralatan mandi";
                          }

                      ?>

                    </td>
                    <td><?php echo $data['nama_barang'];  ?></td>
                    <td><?php echo $data['jumlah_stok'];  ?></td>
                    <td><?php echo $data['harga_satuan'];  ?></td>
                    <td>
                      <a href="update.php?sku=<?php echo $data['sku'] ?>" class="btn btn-outline-warning btn-sm" > Update</a>
                      <a href="delete.php?sku=<?php echo $data['sku'] ?>"class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>



<div class="col">
          <h2 style="margin: 30px 0 30px 0;">Peralatan Mandi</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>SKU</th>
                  <th>Kategori</th>
                  <th>Nama barang</th>
                  <th>jumlah stok</th>
                  <th>Harga satuan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //menampilkan data berdasarkan id kategori=3 yaitu peralatan mandi
                  $query = "SELECT * FROM barang WHERE id_kategori=3";
                  $result = mysqli_query(connection(),$query);
                  $no=1;

                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['sku'];  ?></td>
                    <td>
                      <?php

                          if ($data['id_kategori'] == '1'){
                            echo "minuman";
                          }
                          elseif($data['id_kategori']== '2'){
                            echo "makanan";
                          }
                          else{
                            echo "peralatan mandi";
                          }

                      ?>

                    </td>
                    <td><?php echo $data['nama_barang'];  ?></td>
                    <td><?php echo $data['jumlah_stok'];  ?></td>
                    <td><?php echo $data['harga_satuan'];  ?></td>
                    <td>
                      <a href="update.php?sku=<?php echo $data['sku'] ?>" class="btn btn-outline-warning btn-sm" > Update</a>
                      <a href="delete.php?sku=<?php echo $data['sku'] ?>"class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>





        </div>
      </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>