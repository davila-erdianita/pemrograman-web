<?php
function connection(){
	$dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = "mahasiswa";
   $conn=  mysqli_connect($dbServer,$dbUser,$dbPass,$dbName);

   if(! $conn){
   	die('koneksi tidak berhasil:'.mysqli_error());
   }
   mysqli_select_db($conn,$dbName);

   return $conn;
}
?>
