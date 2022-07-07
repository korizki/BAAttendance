<?php
    include "connection.php";
    function countEmployee($jabatan){
        include "connection.php";
        return mysqli_query($connect, "SELECT COUNT(JABATAN) AS JABATAN FROM t_pekerja WHERE JABATAN LIKE '%$jabatan%' ");
    }

    $belaz = mysqli_fetch_array(countEmployee('BELAZ'))['JABATAN'];
    $shovel = mysqli_fetch_array(countEmployee('SHOVEL'))['JABATAN'];
    $dozer = mysqli_fetch_array(countEmployee('DOZER'))['JABATAN'];
    $grader = mysqli_fetch_array(countEmployee('GRADER'))['JABATAN'];
    $pbelaz = mysqli_fetch_array(countEmployee('PEMANDU BELAZ'))['JABATAN'];
    $pshovel = mysqli_fetch_array(countEmployee('PEMANDU SHOVEL'))['JABATAN'];
    $foreman = mysqli_fetch_array(countEmployee('FOREMAN'))['JABATAN'];
    $wt = mysqli_fetch_array(countEmployee('WATER TRUCK'))['JABATAN'];

?>