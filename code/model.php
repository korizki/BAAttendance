<?php 
    if(isset($_GET['submit'])){
        if($_GET['date'] == ""){
            $date = date('Y-m-d');
            $shift = '1';
        } else {
            $date = $_GET['date'];
            $shift = $_GET['shift'];
        }
    }
    // Query Menampilkan Main Power dengan filter Tanggal dan Shift
    $sql = mysqli_query($connect, "select * from T_MAIN_POWER_PLAN where DATE = '$date' AND SHIFT = $shift");
    $plan_man_power = mysqli_fetch_array($sql,MYSQLI_NUM);
    // Jumlah Opt Belaz_2
    $opt_belaz_2 = $plan_man_power[3];
    // Jumlah Opt Belaz_3
    $opt_belaz_3 = $plan_man_power[4];
    // Jumlah Opt Shovel_2
    $opt_shovel_2 = $plan_man_power[5];
    // Jumlah Opt Shove_3
    $opt_shovel_3 = $plan_man_power[6];
    // Jumlah Opt DZ_2
    $opt_DZ_2 = $plan_man_power[7];
    // Jumlah Opt DZ_3
    $opt_DZ_3 = $plan_man_power[8];
    // Jumlah Opt GD_2
    $opt_GD_2 = $plan_man_power[9];
    // Jumlah Opt GD_3
    $opt_GD_3 = $plan_man_power[10];
    // Jumlah PM Belaz_2
    $opt_PMB_2 = $plan_man_power[11];
    // Jumlah PM Belaz_3
    $opt_PMB_3 = $plan_man_power[12];
    // Jumlah PM Shovel_2
    $opt_PMS_2 = $plan_man_power[13];
    // Jumlah PM Shovel_3
    $opt_PMS_3 = $plan_man_power[14];
    // Jumlah Foreman_2
    $opt_FM_2 = $plan_man_power[15];
    // Jumlah Foreman_3
    $opt_FM_3 = $plan_man_power[16];

    // Query Mencari total operator hadir filter tanggal shift dan jabatan

    // query filter tanggal shift dan operator belaz pit-2
    $q_r_opt_belaz_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'BELAZ PIT 2'");
    $q_r_opt_belaz_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'BELAZ PIT 3'");
    $q_r_opt_shovel_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'SHOVEL PIT 2'");
    $q_r_opt_shovel_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'SHOVEL PIT 3'");
    $q_r_opt_DZ_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'DOZER PIT 2'");
    $q_r_opt_DZ_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'DOZER PIT 3'");
    $q_r_opt_GD_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'GRADER PIT 2'");
    $q_r_opt_GD_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'GRADER PIT 3'");
    $q_r_opt_PMB_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU BELAZ PIT 2'");
    $q_r_opt_PMB_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU BELAZ PIT 3'");
    $q_r_opt_PMS_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU SHOVEL PIT 2'");
    $q_r_opt_PMS_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU SHOVEL PIT 3'");
    $q_r_opt_FM_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'FOREMAN LAPANGAN PIT 2'");
    $q_r_opt_FM_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN = '$date' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'FOREMAN LAPANGAN PIT 3'");

    // menghitung total absen untuk operator belaz PIT-2, nilai dimasukan ke dalam variabel 
    $r_opt_belaz_2 = mysqli_num_rows($q_r_opt_belaz_2);
    $r_opt_belaz_3 = mysqli_num_rows($q_r_opt_belaz_3);
    $r_opt_shovel_2 = mysqli_num_rows($q_r_opt_shovel_2);
    $r_opt_shovel_3 = mysqli_num_rows($q_r_opt_shovel_3);
    $r_opt_DZ_2 = mysqli_num_rows($q_r_opt_DZ_2);
    $r_opt_DZ_3 = mysqli_num_rows($q_r_opt_DZ_3);
    $r_opt_GD_2 = mysqli_num_rows($q_r_opt_GD_2);
    $r_opt_GD_3 = mysqli_num_rows($q_r_opt_GD_3);
    $r_opt_PMB_2 = mysqli_num_rows($q_r_opt_PMB_2);
    $r_opt_PMB_3 = mysqli_num_rows($q_r_opt_PMB_3);
    $r_opt_PMS_2 = mysqli_num_rows($q_r_opt_PMS_2);
    $r_opt_PMS_3 = mysqli_num_rows($q_r_opt_PMS_3);
    $r_opt_FM_2 = mysqli_num_rows($q_r_opt_FM_2);
    $r_opt_FM_3 = mysqli_num_rows($q_r_opt_FM_3);
?>