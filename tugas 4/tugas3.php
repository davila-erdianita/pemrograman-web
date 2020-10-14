<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color:black;
			font-size: 20px;
			color: white;
		}
		ul li a{
			text-decoration: none;
			color: 	#BC8F8F;	
			padding: 5px 20px;
			border: 1px solid transparent;
		}
		ul li a:hover{
		background-color: #BC8F8F;
		color: black
		}
		h2{
			text-align: center;
		}
		.paragraf1{
			margin-top: 10px;
			margin-bottom: 20px;
			margin-left: 30px;
		}
		#akhir{
			border: 1px solid transparent;
			background: #161616;
			text-align: center;
			color: #BC8F8F;
			line-height: 20px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="960.css">
</head>
<body>

	<div class="container_12">
		<div class="grid_12" style="margin-top:-9px;">
			<img src="hdr1.png" style="width: 940px;">
		</div>
		<div class="grid_12" style="background:#161616;">
			<ul>
				<li style="display: inline-block;"><a href="tugas3.php">Home</a></li>
				<li style="display: inline-block;"><a href="#akhir">Contact</a>
			</ul>
		</div>
	</div>



	<div class="container_12"style="margin-top: 40px;">
		<div class="grid_5 omega">
			<img src="pic11.jpg" style="width:380px;">
		</div>
		<div class="grid_7 " style="padding-left:9px;background:rgba(22, 22, 22,0.8);margin-top: 0px;">

			<h2>Personal Details</h2>
				<div class="paragraf1">
					<?php
					$Name="Davila Erdianita";
					$Gender="Female";
					$Address="Jl. Sumba no 6, Malang";

					echo "Name : ".$Name."<br>";
					echo "Gender : ".$Gender."<br>";
					echo "Address : ".$Address."<br>";
					
					?>
				</div>
				<hr style="margin-left: -10px;">
			

			<h2>Education</h2>
				<div class="paragraf1">
					<?php
					$SD="SDN Kauman 1 Malang";
					$SMP="SMPN 1 Malang";
					$SMA="SMAN 3 Malang";

					echo "1. ".$SD."<br>";
					echo "2. ".$SMP."<br>";
					echo "3. ".$SMA."<br>";
					?>
				</div>
									
				<hr style="margin-left: -10px;">

			<h2>Skills</h2>
				<div class="paragraf1">
					<?php
					$skill1="Creative";
					$skill2="Hardworking";

					echo $skill1."<br>";
					echo $skill2."<br>";
					?>
				</div>
				<hr style="margin-left: -10px;">



		</div>
	</div>


	<div class="container_12">
		<div class="grid_12">
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

</body>
</html>