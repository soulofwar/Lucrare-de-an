<?php
session_start();
$errorMSG = "";
//$msg= "Logarea a avut loc cu succes!";
    $username = $_POST["username"];  
    $password = $_POST["password"];
    
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['username']) || empty($_POST['password'])){
    $errorMSG = "Completeaza campurile";
    
  } elseif (strlen($_POST["password"]) <= '8') {
    $errorMSG = "Parola nu are 8 elemente!";
  }
  else {   
    
    $conn = new mysqli('localhost','root','','peco');

    if (mysqli_connect_errno()) {
    
      } else {
        
      }
    
      
  
    $sql = "SELECT username, password FROM admin WHERE username = '$username'";
   
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
   
    if (mysqli_num_rows($result) > 0) {
      if($password===$row['password']) {    
        
        $_SESSION['admin'] = [
          
          "username"=>$row['username'],
        ];
        header("Location: ../HTML/AdminPage.php");
      }else{
        header("Location: ../HTML/Login.html");
      }
    } else {
      header("Location: ../HTML/Login.html");
    }
    
  }

  }

 
  
 



?>