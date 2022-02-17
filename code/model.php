<?php 
    include "connection.php";
    if(isset($_GET['submit'])){
        $date1 = (!empty($_GET['date1']))? $_GET['date1'] : date('Y-m-d');
        $date2 = (!empty($_GET['date2']))? $_GET['date2'] : date('Y-m-d');
        $shift = $_GET['shift'];
        // Query Menampilkan Man Power dengan filter Tanggal dan Shift
    }
    if ($shift == "All"){
        // Jumlah Opt Belaz_2
        $belaz_2 =  mysqli_query($connect, "SELECT SUM(OPT_BELAZ_2) AS BELAZ_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_belaz_2 = mysqli_fetch_array($belaz_2)['BELAZ_2'];
        // Jumlah Opt Belaz_3
        $belaz_3 =  mysqli_query($connect, "SELECT SUM(OPT_BELAZ_3) AS BELAZ_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_belaz_3 = mysqli_fetch_array($belaz_3)['BELAZ_3'];
        // Jumlah Opt Shovel 2
        $shovel_2 =  mysqli_query($connect, "SELECT SUM(OPT_SHOVEL_2) AS SHOVEL_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_shovel_2 = mysqli_fetch_array($shovel_2)['SHOVEL_2'];
         // Jumlah Opt Shovel 3
        $shovel_3 =  mysqli_query($connect, "SELECT SUM(OPT_SHOVEL_3) AS SHOVEL_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_shovel_3 = mysqli_fetch_array($shovel_3)['SHOVEL_3'];
         // Jumlah Opt Dozer 2
        $dozer_2 =  mysqli_query($connect, "SELECT SUM(OPT_DZ_2) AS DZ_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_DZ_2 = mysqli_fetch_array($dozer_2)['DZ_2'];
         // Jumlah Opt Dozer 3
        $dozer_3 =  mysqli_query($connect, "SELECT SUM(OPT_DZ_3) AS DZ_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_DZ_3 = mysqli_fetch_array($dozer_3)['DZ_3'];
         // Jumlah Opt Grader 2
        $GD_2 =  mysqli_query($connect, "SELECT SUM(OPT_GD_2) AS GD_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_GD_2 = mysqli_fetch_array($GD_2)['GD_2'];
        // Jumlah Opt Grader 3
        $GD_3 =  mysqli_query($connect, "SELECT SUM(OPT_GD_3) AS GD_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_GD_3 = mysqli_fetch_array($GD_3)['GD_3'];
        // Jumlah Opt PMB 2
        $PB_2 =  mysqli_query($connect, "SELECT SUM(PM_BELAZ_2) AS PB_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_PMB_2 = mysqli_fetch_array($PB_2)['PB_2'];
        // Jumlah Opt PMB 3
        $PB_3 =  mysqli_query($connect, "SELECT SUM(PM_BELAZ_3) AS PB_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_PMB_3 = mysqli_fetch_array($PB_3)['PB_3'];
        // Jumlah Opt PMS 2
        $PS_2 =  mysqli_query($connect, "SELECT SUM(PM_SHOVEL_2) AS PS_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_PMS_2 = mysqli_fetch_array($PS_2)['PS_2'];
        // Jumlah Opt PMS 3
        $PS_3 =  mysqli_query($connect, "SELECT SUM(PM_SHOVEL_3) AS PS_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_PMS_3 = mysqli_fetch_array($PS_3)['PS_3'];
        // Jumlah Opt FM 2
        $FM_2 =  mysqli_query($connect, "SELECT SUM(FOREMAN_2) AS FM_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_FM_2 = mysqli_fetch_array($FM_2)['FM_2'];
        // Jumlah Opt FM 3
        $FM_3 =  mysqli_query($connect, "SELECT SUM(FOREMAN_3) AS FM_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2'");
        $opt_FM_3 = mysqli_fetch_array($FM_3)['FM_3'];
        // ==================================================================================

        // ready belaz 2
        $q_r_opt_belaz_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'BELAZ PIT 2'");
        // ready belaz 3
        $q_r_opt_belaz_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'BELAZ PIT 3'");
        // ready shovel 2
        $q_r_opt_shovel_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'SHOVEL PIT 2'");
        // ready shovel 3
        $q_r_opt_shovel_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'SHOVEL PIT 3'");
        // ready Dozer 2
        $q_r_opt_DZ_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'DZ PIT 2'");
        // ready Dozer 3
        $q_r_opt_DZ_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'DZ PIT 3'");
        // ready gd 2
        $q_r_opt_GD_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'GRADER PIT 2'");
        // ready GD 3
        $q_r_opt_GD_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'GRADER PIT 3'");
        // pemandu belaz 2
        $q_r_opt_PMB_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU BELAZ PIT 2'");
        // pemandu belaz 3
        $q_r_opt_PMB_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU BELAZ PIT 3'");
          // pemandu shovel 2
        $q_r_opt_PMS_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU SHOVEL PIT 2'");
        // pemandu shovel 3
        $q_r_opt_PMS_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU SHOVEL PIT 3'");
        // ready foreman 2
        $q_r_opt_FM_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'FOREMAN LAPANGAN PIT 2'");
        // ready foreman 3
        $q_r_opt_FM_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'FOREMAN LAPANGAN PIT 3'");
    } else
    {
        $belaz_2 =  mysqli_query($connect, "SELECT SUM(OPT_BELAZ_2) AS BELAZ_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_belaz_2 = mysqli_fetch_array($belaz_2)['BELAZ_2'];
        $belaz_3 =  mysqli_query($connect, "SELECT SUM(OPT_BELAZ_3) AS BELAZ_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_belaz_3 = mysqli_fetch_array($belaz_3)['BELAZ_3'];
        $shovel_2 =  mysqli_query($connect, "SELECT SUM(OPT_SHOVEL_2) AS SHOVEL_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_shovel_2 = mysqli_fetch_array($shovel_2)['SHOVEL_2'];
        $shovel_3 =  mysqli_query($connect, "SELECT SUM(OPT_SHOVEL_3) AS SHOVEL_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_shovel_3 = mysqli_fetch_array($shovel_3)['SHOVEL_3'];
        $dozer_2 =  mysqli_query($connect, "SELECT SUM(OPT_DZ_2) AS DZ_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_DZ_2 = mysqli_fetch_array($dozer_2)['DZ_2'];
        $dozer_3 =  mysqli_query($connect, "SELECT SUM(OPT_DZ_3) AS DZ_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_DZ_3 = mysqli_fetch_array($dozer_3)['DZ_3'];
        $GD_2 =  mysqli_query($connect, "SELECT SUM(OPT_GD_2) AS GD_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_GD_2 = mysqli_fetch_array($GD_2)['GD_2'];
        $GD_3 =  mysqli_query($connect, "SELECT SUM(OPT_GD_3) AS GD_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_GD_3 = mysqli_fetch_array($GD_3)['GD_3'];
        $PB_2 =  mysqli_query($connect, "SELECT SUM(PM_BELAZ_2) AS PB_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_PMB_2 = mysqli_fetch_array($PB_2)['PB_2'];
        $PB_3 =  mysqli_query($connect, "SELECT SUM(PM_BELAZ_3) AS PB_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_PMB_3 = mysqli_fetch_array($PB_3)['PB_3'];
        $PS_2 =  mysqli_query($connect, "SELECT SUM(PM_SHOVEL_2) AS PS_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_PMS_2 = mysqli_fetch_array($PS_2)['PS_2'];
        $PS_3 =  mysqli_query($connect, "SELECT SUM(PM_SHOVEL_3) AS PS_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_PMS_3 = mysqli_fetch_array($PS_3)['PS_3'];
        $FM_2 =  mysqli_query($connect, "SELECT SUM(FOREMAN_2) AS FM_2 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_FM_2 = mysqli_fetch_array($FM_2)['FM_2'];
        $FM_3 =  mysqli_query($connect, "SELECT SUM(FOREMAN_3) AS FM_3 FROM T_MAIN_POWER_PLAN WHERE DATE BETWEEN '$date1' AND '$date2' AND SHIFT = $shift ");
        $opt_FM_3 = mysqli_fetch_array($FM_3)['FM_3'];
        // ==================================================================================

        // ready belaz 2
        $q_r_opt_belaz_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'BELAZ PIT 2'");
        // ready belaz 3
        $q_r_opt_belaz_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'BELAZ PIT 3'");
        // ready shovel 2
        $q_r_opt_shovel_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'SHOVEL PIT 2'");
        // ready shovel 3
        $q_r_opt_shovel_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'SHOVEL PIT 3'");
        // ready Dozer 2
        $q_r_opt_DZ_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'DZ PIT 2'");
        // ready Dozer 3
        $q_r_opt_DZ_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'DZ PIT 3'");
        // ready gd 2
        $q_r_opt_GD_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'GRADER PIT 2'");
        // ready GD 3
        $q_r_opt_GD_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'GRADER PIT 3'");
        // pemandu belaz 2
        $q_r_opt_PMB_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU BELAZ PIT 2'");
        // pemandu belaz 3
        $q_r_opt_PMB_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU BELAZ PIT 3'");
        // pemandu shovel 2
        $q_r_opt_PMS_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU SHOVEL PIT 2'");
        // pemandu shovel 3
        $q_r_opt_PMS_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'PEMANDU SHOVEL PIT 3'");
        // ready foreman 2
        $q_r_opt_FM_2= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'FOREMAN LAPANGAN PIT 2'");
        // ready foreman 3
        $q_r_opt_FM_3= mysqli_query($connect, "SELECT DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE T_FINGER.DATE_ABSEN BETWEEN '$date1' AND '$date2' AND T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_PEKERJA.JABATAN = 'FOREMAN LAPANGAN PIT 3'");
    }

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