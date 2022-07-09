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

    // handle pencarian data absen
    if(isset($_GET['startdate'])){
        $start = $_GET['startdate'];
        $end = $_GET['enddate'];
        $shift = $_GET['shift'];
        if($shift === '3'){
            $shift = "'1','2'";
        }
        // menentukan data realisasi 
        function countFinger($jabatan, $start, $end, $shift){
            include "connection.php";
            return mysqli_query($connect, "SELECT COUNT(DATE_ABSEN) AS DATA FROM t_finger INNER JOIN t_pekerja ON t_finger.ID_PEKERJA = t_pekerja.ID WHERE DATE_ABSEN BETWEEN '$start' AND '$end' AND SHIFT IN($shift) AND JABATAN LIKE '%$jabatan%' ");
        }
        // query PIT 2
        $realbelaz2 = mysqli_fetch_array(countFinger('BELAZ PIT 2', $start, $end, $shift))['DATA'];
        $realshovel2 = mysqli_fetch_array(countFinger('SHOVEL PIT 2', $start, $end, $shift))['DATA'];
        $realpbelaz2 = mysqli_fetch_array(countFinger('PEMANDU BELAZ PIT 2', $start, $end, $shift))['DATA'];
        $realpshovel2 = mysqli_fetch_array(countFinger('PEMANDU SHOVEL PIT 2', $start, $end, $shift))['DATA'];
        $realgrader2 = mysqli_fetch_array(countFinger('GRADER PIT 2', $start, $end, $shift))['DATA'];
        $realdozer2 = mysqli_fetch_array(countFinger('DZ PIT 2', $start, $end, $shift))['DATA'];
        $realforeman2 = mysqli_fetch_array(countFinger('FOREMAN LAPANGAN PIT 2', $start, $end, $shift))['DATA'];
        // query PIT 3
        $realbelaz3 = mysqli_fetch_array(countFinger('BELAZ PIT 3', $start, $end, $shift))['DATA'];
        $realshovel3 = mysqli_fetch_array(countFinger('SHOVEL PIT 3', $start, $end, $shift))['DATA'];
        $realpbelaz3 = mysqli_fetch_array(countFinger('PEMANDU BELAZ PIT 3', $start, $end, $shift))['DATA'];
        $realpshovel3 = mysqli_fetch_array(countFinger('PEMANDU SHOVEL PIT 3', $start, $end, $shift))['DATA'];
        $realgrader3 = mysqli_fetch_array(countFinger('GRADER PIT 3', $start, $end, $shift))['DATA'];
        $realdozer3 = mysqli_fetch_array(countFinger('DZ PIT 3', $start, $end, $shift))['DATA'];
        $realforeman3 = mysqli_fetch_array(countFinger('FOREMAN LAPANGAN PIT 3', $start, $end, $shift))['DATA'];

        // menentukan data plan
        function findPlan($jabatan, $start, $end, $shift){
            include "connection.php";
            return mysqli_query($connect, "SELECT SUM($jabatan) AS $jabatan FROM t_main_power_plan WHERE DATE BETWEEN '$start' AND '$end' AND SHIFT IN($shift) ");
        }
        // query PIT 2
        $planbelaz2 = mysqli_fetch_array(findPlan('OPT_BELAZ_2', $start, $end, $shift))['OPT_BELAZ_2'];
        $planshovel2 = mysqli_fetch_array(findPlan('OPT_SHOVEL_2', $start, $end, $shift))['OPT_SHOVEL_2'];
        $planpshovel2 = mysqli_fetch_array(findPlan('PM_SHOVEL_2', $start, $end, $shift))['PM_SHOVEL_2'];
        $planpbelaz2 = mysqli_fetch_array(findPlan('PM_BELAZ_2', $start, $end, $shift))['PM_BELAZ_2'];
        $plangrader2 = mysqli_fetch_array(findPlan('OPT_GD_2', $start, $end, $shift))['OPT_GD_2'];
        $plandozer2 = mysqli_fetch_array(findPlan('OPT_DZ_2', $start, $end, $shift))['OPT_DZ_2'];
        $planforeman2 = mysqli_fetch_array(findPlan('FOREMAN_2', $start, $end, $shift))['FOREMAN_2'];
        // query PIT 3
        $planbelaz3 = mysqli_fetch_array(findPlan('OPT_BELAZ_3', $start, $end, $shift))['OPT_BELAZ_3'];
        $planshovel3 = mysqli_fetch_array(findPlan('OPT_SHOVEL_3', $start, $end, $shift))['OPT_SHOVEL_3'];
        $planpshovel3 = mysqli_fetch_array(findPlan('PM_SHOVEL_3', $start, $end, $shift))['PM_SHOVEL_3'];
        $planpbelaz3 = mysqli_fetch_array(findPlan('PM_BELAZ_3', $start, $end, $shift))['PM_BELAZ_3'];
        $plangrader3 = mysqli_fetch_array(findPlan('OPT_GD_3', $start, $end, $shift))['OPT_GD_3'];
        $plandozer3 = mysqli_fetch_array(findPlan('OPT_DZ_3', $start, $end, $shift))['OPT_DZ_3'];
        $planforeman3 = mysqli_fetch_array(findPlan('FOREMAN_3', $start, $end, $shift))['FOREMAN_3'];
    }
?>