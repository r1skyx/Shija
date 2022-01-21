<?php include ('activenav.php');?>
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

        <title>Register</title>
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
                <h1 style="color:#bb9f78;font-family:sans-serif;text-align:center;margin-bottom:20px;font-style:normal;font-weight:200;">REGISTER</h1>
                <p style="width:300px;line-height: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium arcu id interdum tempus. </p>
            </div>

            <div class="container">
                <form class="register forms form-style" id="mainForm" method="post" action="register.php">
                    <?php include ('errors.php');?>    
                    <input type="text" id="emri-input" class="inputs" placeholder="Emri" name="emri" value="<?php echo $emri?>"/>
                    <input type="text" id="mbiemri-input" class="inputs" placeholder="Mbiemri" name="mbiemri" value="<?php echo $mbiemri?>"/>
                    <input type="text" id="rusername-input" class="inputs" placeholder="Username" name="username" value="<?php echo $username?>"/>
                    <input type="password" id="rpassword-input" class="inputs" placeholder="Password" name="password"/>
                    <input id="submit" type="submit" class="inputs submit" value="Register" name="register_btn"/>
                    <p style="font-size:15px;">Already have an account? <a href="login.php" style="color:#0044cc;text-decoration: underline;">Sign in</a></p>
                </form>
            </div>
        </main>
        <<footer>
            <?php include ('./components/footer.php');?>    
        </footer>


        <script src="javascript/login.js"></script>
    </body>
</html>