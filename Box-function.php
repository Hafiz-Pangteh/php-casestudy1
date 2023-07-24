<?php

//NADA HALABEE
//HAFIZ PANGTEH

    session_start();
    $sending_date = new DateTime;

  // echo $sending_date->format('Y-m-d');

    $x = $_GET['id'];
   
      //  echo date("Y-m-d", strtotime("+2 day", strtotime($_SESSION['InputTime'][$x])));

   if( $sending_date >= date("Y-m-d", strtotime("+2 day", strtotime($_SESSION['InputTime'][$x])))){

    $_SESSION['DeliveryBy'][$x] = '';
    $_SESSION['ItemNo'][$x] = '';
    $_SESSION['InputTime'][$x] = '';

   }

   else{
    


   }
    header('Location: User-display1.php');

   

?>
