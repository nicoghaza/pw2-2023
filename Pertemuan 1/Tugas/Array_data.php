<?php
  $m_fruits = [
    ['NO' => 1, 'Nama' => 'Mangga', 'Warna' => 'Hijau', 'Stok' => '27/Kg' , 'Harga' => '35.000/Kg' , 'Deskripsi' => 'Mangga mengandung magnesium dan potasium yang dapat menurunkan tekanan darah dan mengurangi peradangan jantung.' ] ,
    ['NO' => 2, 'Nama' => 'Nanas', 'Warna' => 'Kuning', 'Stok' => '30/Kg' , 'Harga' => '12.000/Kg' , 'Deskripsi' => 'Nanas merupakan tanaman buah berupa semak yang memiliki nama ilmiah Ananas comosus.'] ,
    ['NO' => 3, 'Nama' => 'Strawberry', 'Warna' => 'Merah', 'Stok' => '70/Kg' , 'Harga' => '80.000/Kg' , 'Deskripsi' => 'Strawberry merupakan tanaman buah berupa herba yang ditemukan pertama kali di Chili, Amerika.'] ,
    ['NO' => 4, 'Nama' => 'Jeruk', 'Warna' => 'Oranye', 'Stok' => '55/Kg' , 'Harga' => '50.000/Kg' , 'Deskripsi' => 'Buah Jeruk (Citrus sinensis Osbeck) adalah buah yang memiliki kulit berwarna hijau hingga jingga dan daging buahnya mengandung banyak air.']
  ] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>NO</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
          <th width="100px"></th>
        </tr>
      </thead>

      <tbody>
        <?php
            foreach ($m_fruits as $fruit) {
                echo '<tr>' ;
                echo '<td>'. $fruit['NO'] .'</td>';
                echo '<td>' . $fruit['Nama'] . '</td>' ;
                echo '<td>' . $fruit['Warna'] . '</td>' ;
                echo '<td>' . $fruit['Stok'] . '</td>' ;
                echo '<td>' . $fruit['Harga'] . '</td>' ;
                echo '<td>' . $fruit['Deskripsi'] . '</td>' ;
                echo '</tr>';        
              }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>