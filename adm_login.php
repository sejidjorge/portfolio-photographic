<?php
$title = 'Login';
if(isset($login_cookie)){
    echo"<script language='javascript' type='text/javascript'>
    alert('Você já está logado');window.location
    .href='adm.php';</script>";
  }else{
include 'adm/head.php';
include 'adm/logn.php';
include 'adm/footer.php';
  }
?>