<?php
error_reporting(0);
session_start();
if ($_SESSION['admin']) {
  header("Location: ../HTML/AdminPage.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peco</title>

  <!-- Links-->

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../StylePage/indexStyle.css">
</head>
<body>
  <!-- NavBar -->

  <nav class="FirstNav">
    <div class="LogoPeco">
<img src="../Images/logoGas.png" alt="LogoPeco" width="130px" height="100px">
    </div>
<!-- Totul Merge-->
    <div class="Nav_Elements">
      <a href="../ViewStation/ViewPecoPrices.php"><ul>Prices</ul></a>
    <a href="../ViewStation/ViewPecoImport.php"><ul>Stations Import</ul></a>
    <a href="../ViewStation/ViewPecoExport.php"><ul>Stations Export</ul></a>
 
    </div>

    <div class="AdminControler">
    <a href="Login.html"><ul>Cabinet Personal</ul></a>
    </div>
  </nav>

  <div class="background_Images">
    <img src="../Images/backgroundimages.jpg" alt="" width="100%" height="100%"> 
  </div>

</body>
</html>