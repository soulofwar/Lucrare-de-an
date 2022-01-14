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
  <link rel="stylesheet" href="ViewPecoPrices.css">
</head>
<body>
  <!-- NavBar -->

  <nav class="FirstNav">
    <div class="LogoPeco">
<img src="../Images/logoGas.png" alt="LogoPeco" width="130px" height="100px">
    </div>

    <div class="Nav_Elements">
    <a href="ViewPecoPrices.php"><ul>Prices</ul></a>
    <a href="ViewPecoImport.php"><ul>Stations Import</ul></a>
    <a href="ViewPecoExport.php"><ul>Stations Export</ul></a>
    
    </div>

    <div class="AdminControler">
    <a href="../HTML/Login.html"><ul>Cabinet Personal</ul></a>
    </div>
  </nav>

  <div class="Center">
  <?php
  $conn = new mysqli('localhost','root','','peco');

  if (mysqli_connect_errno()) {
  
    } else {
      $sql = "SELECT * FROM pret_combustibil";
 
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <?php if (mysqli_num_rows($result) > 0) {?>
    <div class="tbl-header">
    <table cellpadding='0' cellspacing='0' border='0'>
    <thead>
      <tr>
        <th>Nume</th>
        <th>Company</th>
        <th>Tip Combustibil</th>
        <th>Pret</th>
        <th>Data</th>
      </tr>
    </thead>
  </table>
  </div>
<?php foreach ($result as $row ):?>

  <div class='tbl-content'>
  <table cellpadding='0' cellspacing='0' border="0">
    <tbody>
      <tr>
        <td> <?= $row['ID'] ?> </td>
        <td> <?= $row['Nume_Companie'] ?></td>
        <td> <?= $row['TIp_Combustibil'] ?></td>
        <td> <?= $row['Pret'] ?></td>
        <td> <?= $row['Data'] ?></td>
       </tr>
      
    </tbody>
  </table>
</div>
</section>

<?php endforeach;?>
<?php } ?>
<?php } ?>
  </div>

</body>
</html>