<?php include ('activenav.php')?>
<?php include ('functions.php');
    if(isset($_SESSION['username']))
    {
        header("Location: admin/user.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
        
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

    </head>

    <body>
        <header>
            <?php
                if(isset($_SESSION['username'])){
                    include ('components/loggedheader.php');
                }else{
                    include ('components/header.php');
                }
            ?>    
        </header>
        <main class="loginmain">
            <div class="login-title">
                <h1 style="color:#bb9f78;font-family:sans-serif;text-align:center;margin-bottom:20px;font-style:normal;font-weight:200;">LOGIN</h1>
                <p style="width:300px;line-height: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium arcu id interdum tempus. </p>
            </div>

            <div class="container">
                <form class="form-style" id="mainForm" action="login.php" method="post">
                    <?php include ('errors.php');?>    
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class= "success success1">
                            <h3>
                                <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success'])
                                ?>
                            </h3>

                        </div>
                    <?php endif ?>

                    <input type="text" id="username-input" class="inputs" placeholder="Username" name="username" value="<?php echo $username?>"/>
                    <input type="password" id="password-input" class="inputs" placeholder="Password" name="password" />
                    <input id="submit" type="submit" class="inputs submit" value="Log In" name="login_btn"/>
                    <p style="font-size:15px;">New user? <a href="register.php" style="color:#0044cc;text-decoration: underline;">Create an account</a></p>
                </form>
            </div>
        </main>
        <footer>
            <?php include ('./components/footer.php');?>    
        </footer>


        <script src="javascript/login.js"></script>
    </body>

</html>