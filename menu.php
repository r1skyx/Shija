<?php include ('functions.php');?>

<!DOCTYPE html>
<html>
    <head> 
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
        <?php include ('activenav.php');?>
        <title>Menu</title>
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
            <img src="img/menufoto.jpg" class="home-foto" alt="">


            

            <p class="sec-titulli" style="margin-top:150px">Menu</p>

            <div class="menu-section">
                <div style="margin:30px 30px 30px 0px;">
                    <img src="img/menupije.jpg" style="width:500px;" alt="">
                </div>

                <div class="menu-items">
                    <div style="color:#bb9f78;font-family:sans-serif;text-align:center;margin-bottom:20px;font-style:normal;font-weight:200;">
                        <h2 style="margin-bottom:10px">PIJE</h2>
                        <p style="margin:0px 40px 40px 40px;line-height: 1.6;color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed atque inventore dolor minus aut magnam?</p>
                    </div>
                    <?php
                        while ($row = mysqli_fetch_array($pijeresult)) {?>
                            <div id='menusection'>
                                <div id='menusection1'>

                                    <div id='item'>
                                        <div id='item-title'>
                                            <h2 id='ititle'>
                                                <?php echo $row['titulli']; ?>
                                            </h2>
                                            <div id='ilines'>
                                            </div>
                                            <p id='iprice'>
                                                <?php echo $row['cmimi']; ?>
                                            </p>
                                        </div>
                                    </div>
                               </div>
                            </div>
                                
                        <?php } ?>
                </div>
            </div>     
            


            <div class="menu-section">
                <div class="menu-items">
                    <div style="color:#bb9f78;font-family:sans-serif;text-align:center;margin-bottom:20px;font-style:normal;font-weight:200;">
                        <h2 style="margin-bottom:10px">USHQIM</h2>
                        <p style="margin:0px 40px 40px 40px;line-height: 1.6;color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed atque inventore dolor minus aut magnam?</p>
                    </div>
                    <?php
                        while ($row1 = mysqli_fetch_array($ushqimresult)) {?>
                            <div id='menusection'>
                                <div id='menusection1'>
                                    <div id='item'>
                                        <div id='item-title'>
                                            <h2 id='ititle'>
                                                <?php echo $row1['titulli']; ?>
                                            </h2>
                                            <div id='ilines'>
                                            </div>
                                           <p id='iprice'>
                                                <?php echo $row1['cmimi']; ?>
                                            </p>
                                        </div>
                                        <div id='idesc'>
                                            <p>
                                                <?php echo $row1['pershkrimi']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        <?php } ?>
                </div>

                <div style="margin:30px 0px 30px 50px;">
                    <img src="img/ushqimmenu.jpg" style="width:500px;" alt="">
                </div>

            </div>
        </main>
        <footer>
            <?php include ('./components/footer.php');?>    
        </footer>
    </body>
</html>