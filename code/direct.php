<?php
    if(isset($_GET['search'])){
        $start = $_GET['startdate'];
        $end = $_GET['enddate'];
        header('Location: ../pages/main.php?page=summary&startdate=$start&enddate=$end');
    } else {
        header('Location: ../pages/main.php');
    }
?>