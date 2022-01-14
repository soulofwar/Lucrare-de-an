<?php
error_reporting(0);
session_start();
if (!$_SESSION['admin']) {
  header("Location: ../HTML/IndexPage.php");
}

$company = $_POST['company'];
$combustibil = $_POST['combustibil'];
$tara = $_POST['tara'];
$data = $_POST['data'];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['company']) || empty($_POST['combustibil']) || empty($_POST['tara'])){
    $errorMSG = "Completeaza campurile";
    
  }else {   
    
    

    $conn = new mysqli('localhost','root','','peco');

    if (mysqli_connect_errno()) {
    
      } else {
        $sql = "SELECT ID, Nume_Companie FROM companie WHERE Nume_Companie = '$company'";
   
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
 
 $ID_Company = $row['ID'];
 print_r($ID_Companie);

 $sql = "INSERT INTO combustibil(ID, Tip_Combustibil, Tara_Import, Data_Importare)
 VALUES ('$ID_Company', '$combustibil', '$tara', '$data')";
 if($conn->query($sql) === TRUE) {
   $msg = "<div class='Succes'>Datele au fost inregistrate!</div>"; 
 }
 else{
   
   }
} else {
  $msg = "<div class='Succes'>Nu exista o astfel de companie!</div>"; 
}

      
      
      }

      /*Conexiunea este */

      /* Facem INSERT */

      
  }
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
  <link rel="stylesheet" href="header.css">

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
      <a href="InsertData.php"><ul>Insert</ul></a>
      <a href="../DeleteData/DeleteDataData.php"><ul>Delete</ul></a>
      <a href="#"><ul>View</ul></a>
    </div>

    <div class="Nav_Elements">
    <a><ul>Welcome <?= $_SESSION['admin']['username'] ?></ul></a>
    <a href="Logout.php"><ul>Log Out</ul></a>
    </div>
  </nav>

  <div class="background_Images">
    <img src="../Images/backgroundimages.jpg" alt="" width="100%" height="100%"> 
    <header>
    <div class="header"><h2>Peco Station Resources</h2></div>
    <form class="form" id="form" action="" method="POST">
      <div class="form-control">
        <label>Nume Company</label>
        <input type="text" placeholder="Nume Companie" name="company" id="company" maxlength="30">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
        </div>  
        <div class="form-control">  
        <label>Combustibil</label>
        <input type="text" placeholder="Tipul Combustibil" name="combustibil" id="combustibil" maxlength="30">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
        </div>  
        <div class="form-control">
        <label>Tara</label>
        <input type="text" placeholder="Tara" name="tara" id="tara" maxlength="30">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
        </div>  
        <div class="form-control">
        <label>Data</label>
        <input type="date" placeholder="Data" name="data" id="data" maxlength="30">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
        
</div>  
     
      <button id="submitBtn" type="submit">Adaugam</button>
     
    </form>
    <?php echo $msg; ?>
  </header>
  
  </div>
  <script src="InsertDataCombustibil.js"></script>
</body>
</html>