<?php

// validimi i butonit delete booking i cili ndodhet ne dashboard te adminit

    require_once("../functions.php");

    if(isset($_GET['Del'])){
            

        $UserID = $_GET['Del'];
        $query = "delete from booking where id = '$UserID'";
        $result = mysqli_query($db, $query);
        if($result){
            header("location:bookings.php");
            $_SESSION['success'] = "Rezervimi u fshi me sukses";

        }
        else{
        
            echo ' Please Check Your Query ';
        }
    }