<?php
include('conn.php');
?>
<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.5/examples/jumbotron/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Jumbotron Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
    </style>
    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
  <a class="navbar-brand" href="#">Davila Erdianita</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo "index.php"; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo "form_category.php"; ?>">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#akhir">Contact</a>
      </li>

    </ul>

  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container text-center">
      <h1 class="display-3">Davila Erdianita</h1>
      <p style="display: none;">Selamat datang. Silahkan tambahkan jenjang pendidikan</p>
      <div><a class="btn btn-primary btn-lg" id="show" href="<?php echo "form_category.php"; ?>" role="button">Tambah »</a></div>
    </div>
  </div>


  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
       <img src="pic11.jpg" width="300">
      </div>
      <div class="col-md-4">
        <h1>Biodata</h1>
         <?php
          $Name="Davila Erdianita";
          $Gender="Female";
          $Address="Jl. Sumba no 6, Malang";

          echo "Nama : ".$Name."<br>";
          echo "Jenis kelamin : ".$Gender."<br>";
          echo "alamat : ".$Address."<br>";
          
          ?>

<div id="hide" style="display: none;">
          <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>tipe</th>
              <th>kode operator</th>
              <th>nomor telepon</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //menampilkan data
            $query="SELECT*FROM nomortelepon";
            $result=mysqli_query(connection(),$query);
            $no=1;
            ?>

            <?php while ($data= mysqli_fetch_array($result)): ?>
              <tr>
                 <td><?php echo $no++;?></td>
                  <td>
                      <?php

                          if ($data['kategori_telepon'] == '1'){
                            echo "mobile";
                          }
                          elseif($data['kategori_telepon']== '2'){
                            echo "Fax";
                          }
                          else{
                            echo "office";
                          }

                      ?>

                    </td>
                   <td>
                      <?php

                          if ($data['id_kodetelepon'] == '1'){
                            echo "081";
                          }
                          elseif($data['kategori_telepon']== '2'){
                            echo "085";
                          }
                          elseif($data['kategori_telepon']== '3'){
                            echo "082";
                          }

                      ?>

                    </td>
                <td><?php echo $data['nomor']?></td>
              </tr>
            <?php endwhile;?> 
          </tbody>
        </table>
        <div class="text-center"><a class="btn btn-secondary" href="<?php echo "form_tambahtelepon.php"; ?>" role="button">Tambah  »</a></div>
      </div>
        <button id="tampilan">tampilkan no telepon</button> 
      </div>
              

      <div class="col-md-4">
        <h3>Pendidikan</h3>
        <div id="hide2" style="display: none;">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Jenjang Pendidikan</th>
              <th>Nama Insitusi</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            //menampilkan data
            $query="SELECT*FROM pendidikan";
            $result=mysqli_query(connection(),$query);
            ?>

            <?php while ($data= mysqli_fetch_array($result)): ?>
              <tr>
                <td><?php echo $data['id_pendidikan']?></td>
                <td>
                      <?php

                          if ($data['id_jenjang'] == '1'){
                            echo "SD";
                          }
                          elseif($data['id_jenjang']== '2'){
                            echo "SMP";
                          }
                          elseif($data['id_jenjang']== '3'){
                            echo "SMA";
                          }
                          elseif($data['id_jenjang']== '4'){
                            echo "kuliah";
                          }
                          else{
                            echo "lain";
                          }

                      ?>

                    </td>
                <td><?php echo $data['nama_institusi']?></td>
                <td>
                            <div class="text-center">
                                <a href="form_ubah.php?id_pendidikan=<?= $data['id_pendidikan'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Ubah</a>
                                <a href="form_hapus.php?id_pendidikan=<?= $data['id_pendidikan'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </div>
                        </td>
              </tr>
            <?php endwhile?> 
          </tbody>
        </table>
        <div class="text-center"><a class="btn btn-secondary" href="<?php echo "form_tambah.php"; ?>" role="button">Tambah »</a></div>
        </div>
        <button id="tampilan2">tampilkan</button> 
      

      <h3>Keterampilan</h3>
      <div id="hide3" style="display: none;">
      <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Keterampilan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //menampilkan data
            $query="SELECT*FROM keterampilan";
            $result=mysqli_query(connection(),$query);
            ?>

            <?php while ($data= mysqli_fetch_array($result)): ?>
              <tr>
                <td><?php echo $data['id_keterampilan']?></td>
                <td><?php echo $data['nama_keterampilan']?></td>
              </tr>
            <?php endwhile?> 
          </tbody>
        </table>
      </div>
        <button id="tampilan3">tampilkan</button> 
    </div>
</div>
    <hr>

  </div> <!-- /container -->

</main>

<footer class="container">
  <div id="akhir">
  <?php
        $Email="davilaerdianita1@gmail.com";
        echo "Email : ".$Email."<br>";
        ?>
</div>
</footer>
<script src="css/jquery-3.5.1.slim.min.js.download"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="css/bootstrap.bundle.min.js.download"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#show').mouseenter(function(){
      $('p').show('slow');
    });
    $('#show').mouseleave(function(){
      $('p').hide('slow');
    });
    $('#tampilan').click(function(){
      $('#hide').show('slow');
      $('#tampilan').hide('slow');
    });
    $('#tampilan2').click(function(){
      $('#hide2').show('slow');
      $('#tampilan2').hide('slow');
    });
    $('#tampilan3').click(function(){
      $('#hide3').show('slow');
      $('#tampilan3').hide('slow');
    });
  });
</script>
</body></html>