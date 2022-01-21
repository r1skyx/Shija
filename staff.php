<?php include ('functions.php');?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
        <?php include ('activenav.php');?>
        <title>Home</title>
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
            <h1 style="color:#bb9f78;font-family:sans-serif;text-align:center;margin-bottom:40px;font-style:normal;font-weight:200;">STAFF</h1>

            <div class="staffmembers">

                
                <div class="member">
                    <img src="img/kuzhinjeri1.jpg" style="width:280px" alt="">
                    <p style="color:#bb9f78;margin-top:20px;margin-bottom:5px;font-weight:bold;font-size:19px">Enes Shabani</p>
                    <p style="font-size:15px">Kuzhinjer</p>
                </div>

                <div class="member">
                    <img src="img/kuzhinjeri2.jpg" style="width:280px" alt="">
                    <p style="color:#bb9f78;margin-top:20px;margin-bottom:5px;font-weight:bold;font-size:19px">Ron Asllani</p>
                    <p style="font-size:15px">Kuzhinjer</p>
                </div>

                <div class="member">
                    <img src="img/kuzhinjeri3.jpg" style="width:280px" alt="">
                    <p style="color:#bb9f78;margin-top:20px;margin-bottom:5px;font-weight:bold;font-size:19px">Rilind Neziraj</p>
                    <p style="font-size:15px">Kuzhinjer</p>
                </div>
            </div>



            <div class="slidecontainer" style="margin-top:40px">
                
                <div class="mySlides">
                    <p class="sliderP">"Ushqimet I gatuajme me shume delikatese dhe sigurojme qe do te perjetoni nje shije te paharruar, ashtusiq tregon edhe emri jone!"</p>
                    <h2 class="thenjaEmri">Ron Asllani</h2>
                    <p class="profesioni">Kuzhinjer</p>
                </div>
                <div class="mySlides">
                    <p class="sliderP">"Ushqimet i punojme me shume delikatese dhe pasioni jone per ushqimin na bene me te miret ne rajon. Ju ftojme t'i provoni ushqimet tona."</p>
                    <h2 class="thenjaEmri">Enes Shabani</h2>
                    <p class="profesioni">Kuzhinjer</p>
                </div>

                <div class="mySlides">
                    <p class="sliderP">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus accusantium incidunt a. Sequi, esse maxime accusantium incidunt?"</p>
                    <h2 class="thenjaEmri">Rilind Neziraj</h2>
                    <p class="profesioni">Kuzhinjer</p>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="nr" onclick="currentSlide(1)">1</span> 
                <span class="nr" onclick="currentSlide(2)">2</span> 
                <span class="nr" onclick="currentSlide(3)">3</span> 
            </div>
        </main>



        <footer>
            <?php include ('./components/footer.php');?>    
        </footer>

        <script src="javascript/slider.js"></script>
    </body>
    
</html>
