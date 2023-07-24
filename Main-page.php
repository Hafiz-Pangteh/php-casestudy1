<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
/* Mufida Zuhrah Binti Zulhendri */

h1 {
  padding: 60px;
  text-align: center;
  background:#800000;
  color: white;
  font-size: 50px;
  font-family: "Trebuchet MS", Helvetica, sans-serif;
}
 body{
        background-color: #fdffef;
    }
.container {
    display: flex;
    position: absolute;
    left: 50%;
    top: 55%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
a:hover {
    background-color: #fbc1a1;
    color: white;
}

a:link{
    text-decoration: none;
}

.user:hover{
    background-color: #fbc1a1;
}

.admin:hover{
    background-color: #fbc1a1;
}

.container > div{
    text-align: center;
    background-color:  #ffffff;
    border-style: solid;
    margin: 20px;
    padding: 50px;
    font-size: 30px;
}
</style>
    <title>Main page</title>
</head>
<body>
<div>
<h1> Parcel Management System </h1>
</div>
<div class="container">
<div class="user"> <a href="User-home.php"> User </a> </div>
<div class="admin"> <a href="Admin-home.php"> Admin </a> </div>
</div>
    </body>
</html>