<?php 

//HAFIZ PANGTEH
    session_start();


     $x = $_GET['id'];

        //echo $x;

    $_SESSION['DeliveryBy'][$x] = '';
    $_SESSION['ItemNo'][$x] = '';
    $_SESSION['InputTime'][$x] = '';

 header('Location: User-display1.php');


?>