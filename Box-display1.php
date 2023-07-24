<!DOCTYPE html>

<!-- MUFIDA ZUHRAH BINTI ZULHENDRI -->

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
/* Nada Halabee */
.header {
  padding: 60px;
  text-align: center;
  background:#800000;
  color: white;
  font-size: 30px;
  font-family: "Trebuchet MS", Helvetica, sans-serif;
}

#t01 {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-left: auto;
  margin-right: auto;
  background-color: white;
}

#t01 td{
  border: 2px solid #dddddd;
  text-align: left;
  padding: 20px;
}

</style>
</head>

<!--Mufida Zuhrah Binti Zulhendri,
Hafiz Pangteh -->

<?php session_start() ?>
<body>
 
<div class="header">
  <h1>Parcel Management system</h1>
</div>
 
<br>
 
<div style="display: flex; justify-content: center;">
<br>
<!-- <div> -->
<table>
<th> Delivered By </th>
<th> Item Number </th>
<th> Time of delivery </th>
<th> Time of retrieval </th>
</table>
</div>
<!-- </div> -->

<div style="display: flex; justify-content: center;">
<!-- <center>  -->
<form method=post action="">
<?php
       for($i=0; $i<5; $i++)
       {?>
       <input type=text name="Delivered-by[]" />
       <input type=text name="Item-no[]" />
       <input type=date name="Input-time[]" />
       <input type=date name="Input-time2[]" />
       <br>
      <?php }?>
      <div style="text-align: center; margin-top: 10px;">
        <input type=submit name="add" value="Add" />
       
        <a href="Admin-home.php" >Back</a>
      
      </div>
</form>
</div>
<?php
 
// session_start();
 
if(isset($_POST['add'])){
    // print_r($_POST);
    $DeliveredBy = $_POST['Delivered-by'];
    $ItemNo = $_POST['Item-no'];
    $InputTime = $_POST['Input-time'];
    $InputTime2 = $_POST['Input-time2'];
    
 
    // pass value to session..you miss this part
    $_SESSION['DeliveryBy'] = $DeliveredBy;
    $_SESSION['ItemNo'] = $ItemNo;
    $_SESSION['InputTime'] = $InputTime;
    $_SESSION['InputTime2'] = $InputTime2;
    
//to count how many inputs are there:
 $totalitem=0;
    foreach( $DeliveredBy as $key => $n ) {
        if($n!=""){
            $totalitem++;
        }
    }
 
//display total item quantity
    print "<pre>";
    print "<div style='display: flex; justify-content: center;'>";
    print "total item is ";
    print "$totalitem";
    print "</div>";
    print "</pre>";
 
    //display all inputted items
    
    echo "<table id='t01'>";

    echo "<tr>";
    echo "<td>"; echo "Delivered By:"; echo "</td>";
    echo "<td>"; echo "Item Number:"; echo "</td>";
    echo "<td>"; echo "Input time:"; echo "</td>";
    echo "</tr>"; 

    for($x=0; $x<5; $x++){
     if($_SESSION['DeliveryBy'][$x]!=""){
        echo "<tr>";
        echo "<td>"; echo $_SESSION['DeliveryBy'][$x]; echo "</td>";
        echo "<td>"; echo $_SESSION['ItemNo'][$x]; echo "</td>";
        echo "<td>"; echo $_SESSION['InputTime'][$x]; echo "</td>";
        echo "</tr>";
     }
    }
   // echo "</div>";
    
}
?>
 
</body>

</html>