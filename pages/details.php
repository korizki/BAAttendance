<?php
    $startdate = $_GET['startdate'];
    $enddate = $_GET['enddate'];
    $shift = $_GET['shift'];
    if($shift === "3"){
        $shiftlabel = "All Shift";
    } else {
        $shiftlabel = $shift;
    }
    $pit = $_GET['pit'];
    include "../code/processDetail.php";
?>
<main class="searchContent detailss">
    <!-- aktivasi navigasi -->
    <script>
        document.querySelector('.itemnav').style.opacity = "0.5";
        const active = document.getElementById('search')
        active.style.opacity = 1;
    </script>
    <!-- tombol kembali ke summary -->
    <a href="?page=summary&startdate=<?php echo $startdate ?>&enddate=<?php echo $enddate ?>&shift=<?php echo $shift ?>"><i class="fi fi-rr-angle-left adjust"></i><span class="labelback">Back to summary</span></a>
    <h1>Details</h1>
    <div class="detailbox">
        <h3><i class="fi fi-rr-calendar adjust"></i> List of Attendance</h3>
        <p>Periode at <?php echo date_format(date_create($startdate), "d F Y") ?> - <?php echo date_format(date_create($enddate), "d F Y") ?> | Shift <?php echo $shiftlabel ?></p>
        <table class="detailstable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Operator Type</th>
                    <th>Operator Name</th>
                    <th>Attendance Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    // membuat pagination 
                    // batas data yang ditampilkan per halaman
                    $limit = 10;
                    // inisialisasi halaman 
                    $halaman = isset($_GET['pagenum']) ? (int)$_GET['pagenum'] : 1;
                    $halaman_awal = ($halaman > 1) ? ($halaman * $limit) : 0;
                    // navigasi
                    $previous = $halaman - 1;
                    $next = $halaman + 1;
                    // menentukan jumlah data
                    $jumlahdata = mysqli_num_rows($collect);
                    // menentukan jumlah halaman
                    $total_halaman = ceil($jumlahdata / $limit);
                    // load data
                    if($shift === "3"){
                        $collectLimit = mysqli_query($connect, "SELECT t_pekerja.JABATAN, t_pekerja.NAMA, t_finger.DTIME_ABSEN FROM t_finger INNER JOIN t_pekerja ON ID_PEKERJA = ID WHERE t_finger.DATE_ABSEN BETWEEN '$startdate' AND '$enddate' AND JABATAN LIKE '%PIT $pit%' LIMIT $halaman_awal, $limit ");
                    } else {
                        $collectLimit = mysqli_query($connect, "SELECT t_pekerja.JABATAN, t_pekerja.NAMA, t_finger.DTIME_ABSEN FROM t_finger INNER JOIN t_pekerja ON ID_PEKERJA = ID WHERE t_finger.DATE_ABSEN BETWEEN '$startdate' AND '$enddate' AND t_finger.SHIFT = '$shift' AND JABATAN LIKE '%PIT $pit%' LIMIT $halaman_awal, $limit ");
                    }
                    // penomoran data
                    $no = $halaman_awal+1;
                    while($row = mysqli_fetch_array($collectLimit)){
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['JABATAN'] ?></td>
                                <td><?php echo $row['NAMA'] ?></td>
                                <td> <?php echo $row['DTIME_ABSEN'] ?></td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="navigasi">
            <a href="main.php?page=details&startdate=<?php echo $_GET['startdate']?>&enddate=<?php echo $_GET['enddate'] ?>&shift=<?php echo $_GET['shift']?>&pit=<?php echo $_GET['pit']?>&pagenum=<?php if($halaman > 1){echo $previous;} ?>"><i class="fi fi-rr-angle-left "></i></a>
            <a href="main.php?page=details&startdate=<?php echo $_GET['startdate']?>&enddate=<?php echo $_GET['enddate'] ?>&shift=<?php echo $_GET['shift']?>&pit=<?php echo $_GET['pit']?>&pagenum=<?php if($halaman < $total_halaman){ echo $next; } ?>"><i class="fi fi-rr-angle-right "></i></a>
        </div>
    </div>
</main>