<?php
    include_once 'header.php';
?>

<div class="container">
  <h2 align="center">Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rata-rata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Nico Ghaza Ardian</td>
              <td>Bahasa Inggris</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Nico</td>
              <td>Komunikasi Efektif</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
					require_once 'libfungsi.php';
                    $no = 3;
                    $nama = $_POST['nama_lengkap'];
                    $matkul = $_POST['matkul'];
                    $uts = $_POST['nilai_uts'];
                    $uas = $_POST['nilai_uas'];
                    $tugas = $_POST['nilai_tugas'];
                    $dt = dataNilai($uts, $uas, $tugas);
                    $grade = grade($dt);
                    $predikat = predikat($dt);
                    $kelulusan = kelulusan($dt);
        
                    echo '<td>' . $no;
                    echo '<td>' . $nama;
                    echo '<td>' . $matkul;
                    echo '<td>' . $uts;
                    echo '<td>' . $uas;
                    echo '<td>' . $tugas;
                    echo '<td>' . $dt;
                    echo '<td>' . $grade;
                    echo '<td>' . $predikat;
                    echo '<td>' . $kelulusan;
          ?>
      </tbody>
  </table>
</div>
<?php
    include_once 'footer.php';
?>