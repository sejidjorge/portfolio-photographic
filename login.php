<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
include 'php/connect.php';


$query = "SELECT * FROM `users` WHERE `email`='$email' AND `senha`='$senha'";
echo $query;
$verifica = $conn->query($query);

$row = mysqli_num_rows($verifica);
      if ($row<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='adm_login.php';</script>";
        die();
      }else{
        setcookie("email", $email, time() * 3600); 
        header("Location:adm.php");
      }
?>