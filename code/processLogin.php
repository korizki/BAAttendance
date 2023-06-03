<?php 
    include "connection.php";
    if(isset($_POST['loginbtn'])){
        // session_start();
        // $user = $_POST['username'];
        // $password = md5($_POST['password']);
        // $searchuser = mysqli_query($connect, "SELECT * FROM t_user WHERE user_name = '$user' AND password = '$password' ");
        // if(mysqli_num_rows($searchuser) > 0){
        //     $_SESSION['username'] = mysqli_fetch_array($searchuser)['name'];
        header('Location: ../pages/main.php');
        // } else {
        //     header('Location: ../pages/login.php?login-status=failed');
        // }
    } else {
        header('Location: ../pages/login.php');
    }
    
?>