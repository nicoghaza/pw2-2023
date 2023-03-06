<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2> <center> Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Nico Ghaza Ardian</td>
					<td>nicoghza@gmail.com</td>
					<td>Jl. Situ Indah Kelapa Dua Depok</td>
                    <td>087781528625</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Ardian</td>
					<td>ardian123@gmail.com</td>
					<td>Jakarta</td>
                    <td>085655563572</td>
				</tr>

				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */

				  if (isset($_POST["proses"])) {

				
                $nama_lengkap = $_POST ["nama lengkap"] ;
                $email = $_POST ["email"] ;
                $alamat = $_POST ["alamat"] ;
                $telepon = $_POST ["telepon"] ;
        
                echo "<tr>" ;
                echo "<td>" . $i . "</td>" ;
                echo "<td>" . $nama_lengkap . "</td>" ; 
                echo "<td> " . $email .  "</td>" ;
                echo "<td> " . $alamat .  "</td>" ;
                echo "<td> " . $telepon .  "</td>" ;
                echo "</tr>" ;
				
				  }
                  
				?>

			</tbody>
		</table>
	</div>
</body>
</html>