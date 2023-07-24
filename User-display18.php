<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
/* Nada Halabee */
body {
  background-color: #990000;
}
.header {
  padding: 60px;
  text-align: center;
  background:#800000;
  color: white;
  font-size: 30px;
  font-family: "Trebuchet MS", Helvetica, sans-serif;   
}

div.a {
  text-align: center;
  color: white;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  position: absolute;
  top: 60%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  background-color: white;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 20px;
}

/*tr:nth-child(even) {
  background-color: #dddddd;
}*/
div.b {
  position: absolute;
  top: 90%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

</style>
</head>
<body>

<div class="header">
  <h1>Parcel Management system</h1>
</div>


<div class="a">
<h2>House no.18</h2>
</div>

<font face=”arial” size=”2” color=”#000000”>
<form method="post" action="Box-user-display1.php">

<table>

<?php  

session_start();

$totalitem=0;
foreach($_SESSION['DeliveryBy'] as $key => $n ) {
    if($n!=""){
        $totalitem++;
    }
}

echo "<div style='display: flex; justify-content: center;'>";
echo "Total item is:";
echo $totalitem;
echo "</div>";

//NADA HALABEE

for($x=0; $x<5; $x++) {
  if($_SESSION['DeliveryBy'][$x]!=""){
echo "<tr>";
echo "<td>"; echo $x+1; echo "</td>";
echo "<td>"; echo $_SESSION['DeliveryBy'][$x];  echo "</td>";
echo "<td>"; echo $_SESSION['InputTime'][$x];  echo "</td>";
echo "<td>"; ?> <a href="clear-session.php?id=<?php echo $x; ?>"><button type="button" class="btn btn-success">retrieve</button></a><?php echo "</td>";
echo "<td>"; ?> <a href="Box-function.php?id=<?php echo $x; ?>"><button type="button" class="btn btn-danger">Delete</button></a><?php echo "</td>";

echo "</tr>";
  }
  else{
  echo "<tr>";
echo "<td>"; echo $x+1; echo "</td>";
echo "<td>"; echo ' ';  echo "</td>";
echo "<td>"; echo ' ';  echo "</td>";
echo "<td>"; ?> <a href="clear-session.php?id=<?php echo $x; ?>"><button type="button" class="btn btn-success">retrieve</button></a>  <?php echo "</td>";
echo "<td>"; ?> <a href="Box-function.php?id=<?php echo $x; ?>"><button type="button" class="btn btn-danger">Delete</button></a><?php echo "</td>";

echo "</tr>";
  
  } 
} 

?>



</body>
</html>
