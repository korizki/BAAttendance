<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link rel="icon" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/styles/index.css" />
	<link rel="stylesheet" href="../assets/styles/responsive.css" />
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>
<body>
    <div class="outboxmain">
        <nav>
            <img src="../assets/images/logoptba.png" height="40px" width="auto" alt="iconptba">
            <a href="?page=home" class="itemnav">
                <img src="../assets/images/iconhome.png" width="30" height="30" alt="icon">
                <p>Home</p>
            </a>
            <a href="?page=search" class="itemnav">
                <img src="../assets/images/iconsearch.png" width="30" height="30" alt="icon">
                <p>Search</p>
            </a>
            <a href="../index.php" class="itemnav">
                <img src="../assets/images/iconlogoff.png"  width="30" height="30" alt="icon">
                <p>Log Out</p>
            </a>
        </nav>
        <?php 
            if(isset($_GET['page'])){
                switch($_GET['page']){
                    case 'home':
                        include "mainsum.php";
                        break;
                    case 'search':
                        include "searchData.php";
                        break;
                    case 'summary' : 
                        include "summary.php";
                        break;
                    case 'details' : 
                        include "details.php";
                        break;
                    default : 
                        include "mainsum.php";
                        break;
                }
            } else {
                include "mainsum.php";
            }
        ?> 
    </div>

</body>
</html>