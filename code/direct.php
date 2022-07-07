<?php
    if(isset($_GET['search'])){
        $start = $_GET['startdate'];
        $end = $_GET['enddate'];
        $shift = $_GET['shift'];
        header("Location: ../pages/main.php?page=summary&startdate=$start&enddate=$end&shift=$shift");
    } else {
        header('Location: ../pages/main.php');
    }
?>