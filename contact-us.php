<?php include ('activenav.php');?>
<?php include ('functions.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
        <title>Contact Us</title>
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
        <main>
            <img src="img/gpsfoto.jpg" class="home-foto" alt="" style="width:60%;margin:0 auto;">
            <div class="contactus-container">
                <div>
                    <form id="myForm" class="contactus" method="post" action="contact-us.php">
                        <p class="contactp">Na Kontaktoni</p>

                        <?php include ('errors.php');?>
                        <?php if (isset($_SESSION['success'])): ?>
                            <div class= "csuccess">
                                <h3>
                                    <?php
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success'])
                                    ?>
                                </h3>

                            </div>
                        <?php endif ?> 

                        <div class="contact-Text">
                            <input type="text" placeholder="Emri" class="input" name="cemri" value="<?php echo $cemri?>">
                            <input type="text" placeholder="Email" class="input" name="cemail" value="<?php echo $cemail?>">
                        </div>
                        
                        <div class="subject">
                            <input type="text" placeholder="Titulli" class="input" name="ctitulli">
                        </div>
                        
                        <div class="msg">
                        <textarea  class="area" placeholder="Mesazhi" name="cmesazhi"></textarea>
                        </div>
                        
                        <div>
                            <button class="btn" name="dergo_btn">Dergo Mesazhin</button>
                        </div>
                    </form>
                </div>
                <div class="contacttext">
                    <h2>
                        Mos t'vje marre, dergo mesazh!
                    </h2>
                    <p>
                        Lorem ipsum dolor sit a, amet consectetur adipisicing elit. Recusandae soluta neque minima eveniet amet distinctio ad tempora, molestias consequuntur impedit! Esse distinctio odit provident nesciunt excepturi totam. Adipisci, necessitatibus autem!
                    </p>
                    <p>
                        Nunc id dui mauris. Ut ut rutrum felis. In a elit congue, fringilla lectus in, pulvinar erat. Integer commodo pretium odio ac lacinia.
                    </p>
                </div>
                
            </div>

        </main>
        <footer>
            <?php include ('./components/footer.php');?>    
        </footer>
    </body>
</html>