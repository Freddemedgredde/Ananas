<!DOCTYPE>
<html lang="en">

<head>
    <?php require_once('../../connect/database.php') ?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Register.css">
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

      </div>

      <div class="form">
      <form action="Registration.php" method="post">

      Username:<br>
      <input type="text" name="username"><br>
      Password:<br>
      <input type="text" name="password"><br>
      Email Address:<br>
      <input type="text" name="emailadress" placeholder=""><br><br>
      <input type="submit" value="Register">
      </div>


  </form> 

    <a href="http://localhost/Slutproject/Register.php" > <button type="button"  >Login</button> </a> <br> 

</body>
