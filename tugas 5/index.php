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
      <a class="navbar-brand" href="#">Davila Erdianita</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="<?php echo "index.php"; ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="#akhir">Contact</a>
        </div>
      </div>
      </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-4 ">Davila Erdianita</h1>
    <p class="lead">Selamat Datang</p>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col text-center">
      <img src="pic11.jpg" width="400" >
    </div>
    <div class="col">
      <h3>Personal Details</h3>
          <?php
          $Name="Davila Erdianita";
          $Gender="Female";
          $Address="Jl. Sumba no 6, Malang";

          echo "Name : ".$Name."<br>";
          echo "Gender : ".$Gender."<br>";
          echo "Address : ".$Address."<br>";
          
          ?>
        <hr style="margin-left: -10px;">

      <h3>Education</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Education</th>
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
                <td><?php echo $data['nama_institusi']?></td>
              </tr>
            <?php endwhile?> 
          </tbody>
        </table>

      <h3>Skills</h3>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Skill</th>
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
  </div>
</div>


<div class="container text-center">
  <div class="row">
    <div class="col"style="margin-top: 100px;">
      <div id="akhir">
  <?php
        $Telephone1 = "081122332245";
        $Telephone2 = "081122332245";
        $Email="davilaerdianita1@gmail.com";

        echo "Telephone Number : ".$Telephone1."<br>";
        echo "No. Telephone : ".$Telephone2."<br>";
        echo "Email : ".$Email."<br>";
        ?>
      </div>
    </div>
  </div>
</div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>