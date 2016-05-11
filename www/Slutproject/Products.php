<!DOCTYPE>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="Products.css">
    <title>Slutprojekt</title>

</head>

<body>
      <h1>Anime Machine</h1>
      <div class="items" id="items">

    </div>

    <div class="dropdownmenu">
    <nav>
  <ul>
    <li><a href="http://localhost/Slutproject/PaintR.php">Home</a>
    </li>
    <li><a href="http://localhost/Slutproject/Products.php">Products</a>
      <ul>

                
          <ul>
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Resources</a>
      <ul>

      </ul>
    </li>
    <li><a href="http://localhost/Slutproject/Register.php">Register</a></li>
  </ul>
</nav>
</div>

    <div class="Products">
      

    </div>

    <a href="http://localhost/Slutproject/Register.php" > <button type="button"  >Login</button> </a> <br> 

</body>

<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'webshop';

$conn_error = "The Conection Failed";

$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if($mysqli->connect_errno) {
  die($conn_error." ".$mysqli->connect_error);
} 

else {
  echo "Connection established";
}

?>
