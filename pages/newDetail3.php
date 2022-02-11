<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Attendance PIT-3</title>
	  <link rel="icon" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/styles/index.css" />
    <link rel="stylesheet" href="../assets/styles/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-position: 10% 100%;">
  <?php
    //Menghubungkan ke database localhost  
    include '../code/connection.php';
    include "../code/model_prev.php";
  ?>  
  <?php
    $limit = 10;
    // jika shift All query berubah
    if ($shift == 'All'){
      $sql = "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, DTIME_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.STATUS = 0 AND T_FINGER.DATE_ABSEN BETWEEN '$date13' AND '$date23' AND (T_PEKERJA.JABATAN = 'BELAZ PIT 3' OR T_PEKERJA.JABATAN = 'SHOVEL PIT 3' OR T_PEKERJA.JABATAN = 'GRADER PIT 3' OR T_PEKERJA.JABATAN = 'DZ PIT 3' OR T_PEKERJA.JABATAN = 'PEMANDU BELAZ PIT 3' OR T_PEKERJA.JABATAN = 'PEMANDU SHOVEL PIT 3' OR T_PEKERJA.JABATAN = 'FOREMAN LAPANGAN PIT 3')";
    } else {
      $sql = "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, DTIME_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE  T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_FINGER.DATE_ABSEN BETWEEN '$date13' AND '$date23' AND (T_PEKERJA.JABATAN = 'BELAZ PIT 3' OR T_PEKERJA.JABATAN = 'SHOVEL PIT 3' OR T_PEKERJA.JABATAN = 'GRADER PIT 3' OR T_PEKERJA.JABATAN = 'DZ PIT 3' OR T_PEKERJA.JABATAN = 'PEMANDU BELAZ PIT 3' OR T_PEKERJA.JABATAN = 'PEMANDU SHOVEL PIT 3' OR T_PEKERJA.JABATAN = 'FOREMAN LAPANGAN PIT 3')";  
    }
    $rs_result = mysqli_query($connect, $sql);  
    $row = mysqli_fetch_row($rs_result);  
    $total_records = $row[0];  
    $total_pages = ceil($total_records / $limit);
  ?>

  <div class="wrapper detailPIT2">
    <h2><i class="fa fa-users"></i>PIT-3 | List Of Attendance  </h2>
    <div class="boxListAttendance">
      <div id="target-content" class="tAttendance">
        <div class="t_operator">
          <table>
            <thead>
              <tr>
                <th>No.</th>
                <th>Attendance Time</th>
                <th>Name</th>
                <th>Operator Type</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                // pagination
                $limit = 10;
                $halaman = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $halaman_awal = ($halaman >1) ? ($halaman * $limit) - $limit : 0;
                $prev = $halaman -1;
                $next = $halaman +1;
                $data = mysqli_query($connect, $sql);
                $jumlah_data = mysqli_num_rows($data);
                $total_halaman = ceil($jumlah_data / $limit);
  
                // load data dari database
                $data_absen = mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, DTIME_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE  T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_FINGER.DATE_ABSEN BETWEEN '$date13' AND '$date23' AND (T_PEKERJA.JABATAN = 'BELAZ PIT 3' OR T_PEKERJA.JABATAN = 'SHOVEL PIT 3' OR T_PEKERJA.JABATAN = 'GRADER PIT 3' OR T_PEKERJA.JABATAN = 'DZ PIT 3' OR T_PEKERJA.JABATAN = 'PEMANDU BELAZ PIT 3' OR T_PEKERJA.JABATAN = 'PEMANDU SHOVEL PIT 3' OR T_PEKERJA.JABATAN = 'FOREMAN LAPANGAN PIT 3') ORDER BY T_PEKERJA.JABATAN, T_PEKERJA.NAMA ASC LIMIT $halaman_awal, $limit");
                // jika shift = All
                if ($shift == 'All'){
                  $data_absen = mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, DTIME_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.STATUS = 0 AND T_FINGER.DATE_ABSEN BETWEEN '$date13' AND '$date23' AND (T_PEKERJA.JABATAN = 'BELAZ PIT 3' OR T_PEKERJA.JABATAN = 'SHOVEL PIT 3' OR T_PEKERJA.JABATAN = 'GRADER PIT 3' OR T_PEKERJA.JABATAN = 'DZ PIT 3' OR T_PEKERJA.JABATAN = 'PEMANDU BELAZ PIT 3' OR T_PEKERJA.JABATAN = 'PEMANDU SHOVEL PIT 3' OR T_PEKERJA.JABATAN = 'FOREMAN LAPANGAN PIT 3') ORDER BY T_PEKERJA.JABATAN, T_PEKERJA.NAMA ASC LIMIT $halaman_awal, $limit");
                }
                $no = $halaman_awal + 1;
                while($row = mysqli_fetch_array($data_absen)){
                  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['DTIME_ABSEN'] ?></td>
                      <td><?php echo ucwords(strtolower($row['NAMA'])) ?></td>
                      <td><?php echo ucwords(strtolower($row['JABATAN'])) ?></td>
                    </tr>
                  <?php
                }
              ?>
            </tbody>
          </table>
        </div>
        <nav class="pagination">
          <ul>
            <li class="pagination-item">
              <a class="pagination-link" <?php if($halaman > 1){echo "href='?page=$prev&date13=$date13&date23=$date23&shift3=$shift&submit3=Submit'";}?>><i class="fa fa-angle-left" style="margin-right: 0"></i></a>
            </li>
            <?php 
              for($x=1; $x<=$total_halaman; $x++){
                ?>
                  <li class="pagination-item"><a class="pagination-link" href="?page=<?php echo $x; ?>&date13=<?php echo $date13 ?>&date23=<?php echo $date23?>&shift3=<?php echo $shift ?>&submit3=Submit"><?php echo $x?></a></li>
                <?php
              }
            ?>
            <li class="pagination-item">
              <a class="pagination-item" <?php if($halaman < $total_halaman){ echo "href='?page=$next&date13=$date13&date23=$date23&shift3=$shift&submit3=Submit'";}?>><i class="fa fa-angle-right" style="margin-right: 0"></i></a>
            </li>
          </ul>
        </nav>
      </div>
      <figure class="illusAtt">
        <img src="../assets/images/t-illus.svg" alt="Illustration" />
      </figure>
    </div>
    
  </div>
</body>
</html>