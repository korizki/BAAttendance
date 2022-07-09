<?php
    include "connection.php";
    if(isset($startdate)){
        if($shift === "3"){
            $collect = mysqli_query($connect, "SELECT t_pekerja.JABATAN, t_pekerja.NAMA, t_finger.DTIME_ABSEN FROM t_finger INNER JOIN t_pekerja ON ID_PEKERJA = ID WHERE t_finger.DATE_ABSEN BETWEEN '$startdate' AND '$enddate' AND JABATAN LIKE '%PIT $pit%' ");
        } else {
            $collect = mysqli_query($connect, "SELECT t_pekerja.JABATAN, t_pekerja.NAMA, t_finger.DTIME_ABSEN FROM t_finger INNER JOIN t_pekerja ON ID_PEKERJA = ID WHERE t_finger.DATE_ABSEN BETWEEN '$startdate' AND '$enddate' AND t_finger.SHIFT = '$shift' AND JABATAN LIKE '%PIT $pit%' ");
        }
    } else {
        header("Location: ../pages/main.php?page=search");
    }
?>