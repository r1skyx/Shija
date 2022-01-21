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
            
            <div class="slideshow-container" style="margin-bottom:80px">
                <div class="mySlides1">
                    <img src="img/homefoto1.jpg" style="width:90%" onclick="plusSlides1(-1)">
                </div>

                <div class="mySlides1">
                    <img src="img/homefoto2.jpg" style="width:90%" onclick="plusSlides1(1)">
                </div>
                <script>
                    var slideIndex1 = 1;
                    showSlides1(slideIndex1);

                    function plusSlides1(m) {
                        showSlides1(slideIndex1 += m);
                    }

                    function currentSlide1(m) {
                        showSlides1(slideIndex1 = m);
                    }

                    function showSlides1(m) {
                        var i;
                        var slides1 = document.getElementsByClassName("mySlides1");
                        if (m > slides1.length) {slideIndex1 = 1}    
                        if (m < 1) {slideIndex1 = slides1.length}
                        for (i = 0; i < slides1.length; i++) {
                            slides1[i].style.display = "none";  
                        }
                        
                        slides1[slideIndex1-1].style.display = "block";  
                    }
                </script>

                <div class="homebooking">
                    <form method="post" action="home.php">
                        <?php include ('errors.php');?>
                            <?php if (isset($_SESSION['success'])): ?>
                                <div class= "csuccess" style="width:100%home">
                                    <h3>
                                        <?php
                                            echo $_SESSION['success'];
                                            unset($_SESSION['success'])
                                        ?>
                                    </h3>
                                </div>
                            <?php endif ?>
                        <h1 style="color:#bb9f78;font-family:sans-serif;text-align:center;margin-bottom:20px;">Book</h2>
                        <input type="text" placeholder="Persons" class="hBookingInput" name="personsBooking">
                        <input type="text" placeholder="Date" class="hBookingInput" name="dateBooking">
                        <input type="text" placeholder="Hour" class="hBookingInput" name="hourBooking">
                        <button class="bookbtn" name="book_btn">BOOK NOW</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="side">
                    <div class="side2">
                        <h1 style="color:#bb9f78;font-family:sans-serif;text-align:center;margin-bottom:20px;font-style:normal;font-weight:200;">STAFF</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis expedita natus exercitationem, amet eius placeat quas.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum veniam atque eaque odio quae nam saepe sapiente vero ad enim, repellendus voluptatum earum, hic vitae a quibusdam, et beatae repudiandae?</p>
                        <a  href="staff.php" class="buttonAnchor"><button class="homebutton">Staff</button></a>
                    </div>
                    <img src="img/homekuzhinjeri.jpg" alt="homekuzhinjeri" class="homekuzhinjeri">
                </div>

                <div>
                    <h1 style="color:#bb9f78;font-family:sans-serif;text-align:center;margin-bottom:20px;font-style:normal;font-weight:200;margin:80px">MENU</h1>
                    <div style="text-align: center;">
                        <?php while ($row = mysqli_fetch_array($pijeresult)){   ?>
                            <div id='menusection' >
                                <div id='item' style="width:40%">
                                    <div id='item-title'>
                                        <h2 id='ititle' style="color:#C9AB81;font-size:20px">
                                            <?php echo $row['titulli']; ?>
                                        </h2>
                                        <div id='ilines'>
                                        </div>
                                        <p id='iprice' style="color:#C9AB81;font-size:20px">
                                            <?php echo $row['cmimi']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <a  href="menu.php" class="buttonAnchor"><button style="margin-top:20px;" class="homebutton menuButton">Menu</button></a>
                    </div>
                </div>

            </div>

            <div class="slidecontainer" style="margin-top:40px">
                
                <div class="mySlides">
                    <p class="sliderP">"Ushqimet ne kete restaurant jane shume te shijeshme. Stafi eshte shume mikeprites dhe pastertia eshte gjithmone ne nivel."</p>
                    <h2 class="thenjaEmri">Anila Qerimi</h2>
                    <p class="profesioni">Konsumator</p>
                </div>
                <div class="mySlides">
                    <p class="sliderP">"Ushqimet i punojme me shume delikatese dhe pasioni jone per ushqimin na bene me te miret ne rajon. Ju ftojme t'i provoni ushqimet tona."</p>
                    <h2 class="thenjaEmri">Enes Shabani</h2>
                    <p class="profesioni">Kuzhinjer</p>
                </div>

                <div class="mySlides">
                    <p class="sliderP">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus accusantium incidunt a. Sequi, esse maxime accusantium incidunt?"</p>
                    <h2 class="thenjaEmri">Filan Fisteku</h2>
                    <p class="profesioni">Kamarier</p>
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
