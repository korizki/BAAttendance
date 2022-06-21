<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <link rel="icon" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/styles/index.css" />
	<link rel="stylesheet" href="../assets/styles/responsive.css" />
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>
<body>
    <main class="loginmain">
        <div>
            <aside>
                <figure>
                    <figcaption>
                        <h1>Please Log In</h1>
                        <p>Before accessing Administrator menu, you should log in using registered user before.</p>
                    </figcaption>
                    <img src="../assets/images/loginilus.svg" alt="login-illustration" width="700" height="auto">
                </figure>
            </aside>
            <div class="loginbox" id="login">
                <img width=auto height=40 class="nav_icon" src="../assets/images/logoptba.png" alt="logo_ptba">
                <div>
                    <a href="#login" id="fail"></a>
                    <h2>Log In Form</h2>
                    <form action="#" class="forminput">
                        <?php 
                            if(isset($_GET['login-status'])){
                                if($_GET['login-status'] === 'failed'){
                                    echo " 
                                        <p class='warning'>Login Failed, wrong username or password!</p>
                                        <script>document.getElementById('fail').click()</script>
                                    ";
                                }
                            }
                        ?>
                        <div>
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username">
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="text" id="password" name="password">
                        </div>
                        <a href=""><i class="fi fi-rr-sign-out adjust"></i> Log In</a>
                        <p>Not registered or forgot password? Please contact your System Administrator</p>
                    </form>
                </div>
                
                <a href="../index.php"><i class="fi fi-rr-angle-left" style="display: inline-block; transform: translate(-5px, 3px)"></i> Back to homepage</a>
            </div>
        </div>
    </main>
</body>
</html>