<?php
error_reporting(0);
session_start();
if (!$_SESSION['admin']) {
  header("Location: ../HTML/IndexPage.php");
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../StylePage/indexStyle.css">
  <link rel="stylesheet" href="../HTML/InsertData.css">

</head>
<body>
  <!-- NavBar -->

  <nav class="FirstNav">
    <div class="LogoPeco">
<img src="../Images/logoGas.png" alt="LogoPeco" width="130px" height="100px">
    </div>

    <div class="Nav_Elements">
    <a href="#"><ul>Prices</ul></a>
    <a href="#"><ul>Stations</ul></a>
    <a href="../UpdatePages/UpdateData.php"><ul>Modify</ul></a>
    <a href="../HTML/InsertData.php"><ul>Insert</ul></a>
    <a href="DeleteDataData.php"><ul>Delete</ul></a>
    <a href="#"><ul>View</ul></a>
    </div>

    <div class="Nav_Elements">
    <a><ul>Welcome <?= $_SESSION['admin']['username'] ?></ul></a>
    <a href="../HTML/Logout.php"><ul>Log Out</ul></a>
    </div>
  </nav>

  <div class="background_Images">
    <img src="../Images/backgroundimages.jpg" alt="" width="100%" height="100%"> 
    <header>
    <div class="Nav_Elements">
    <a href="DeleteDataCompany.php"><ul>Company</ul></a>
    <a href="DeleteDataCombustibil.php"><ul>Resources</ul></a>
    <a href="UpdateDataPecoImport.php"><ul>IPrices&Quantity</ul></a>
    <a href="UpdateDataPecoExport.php"><ul>EPrices&Quantity</ul></a>
    <a href="UpdatePecoPricesClients.php"><ul>PecoClientsPrices</ul></a>
    </div>
  </header>
  
  </div>
  <script src="../UpdatePages/UpdateData.js"></script>
</body>
</html>