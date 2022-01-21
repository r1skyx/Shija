<?php include ('../functions.php');
    session_start();
    if(isset($_SESSION['role']) && isset($_SESSION['username'])){
        if(strcmp($_SESSION['role'], 'user')== 0){
?>

<?php 

    require_once("../functions.php");
    $bookinglist = "select * from booking";
    $result = mysqli_query($db, $bookinglist);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">

        <title>Bookings</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
        <?php include ('../activenav.php')?>
    </head>

    <body>
        <header>
            <?php include ('components/userheader.php');?>    
        </header>

        <main >
            <?php if (isset($_SESSION['success'])): ?>
                    <div class= "success">
                        <h3>
                            <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success'])
                            ?>
                        </h3>

                    </div>
                <?php endif ?>
            <div class="mesazhi-main">
                
                <table class="table table-bordered">
                    <tr class="top-table">
                        <td> Personat </td>
                        <td> Data </td>
                        <td> Ora </td>

                    </tr>

                    <?php 
                            
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $id = $row['id'];
                                $persons = $row['persons'];
                                $date = $row['date'];
                                $hour = $row['hour'];
                    ?>
                            <tr>
                                <td><?php echo $persons ?></td>
                                <td><?php echo $date ?></td>
                                <td><?php echo $hour ?></td>
                            </tr>        
                    <?php 
                            }  
                    ?>                                                                    
                        

                </table>
            </div>
                 
               
        </main>
        <footer>
            
        </footer>


    </body>
</html>
<?php
}else{
    header("Location: admin.php");
    exit();
}
}
else{
    header("Location: ../login.php");
    exit();
}
?>