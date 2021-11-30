<?php

require 'php/connect.php';

$video = 'video';
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$dir = 'videos/';

if(isset($_FILES['video']))
{
   $ext = strtolower(substr($_FILES[$video]['name'],-4)); //Pegando extensão do arquivo
   $new_name = $titulo . $ext; //Definindo um novo nome para o arquivo
   move_uploaded_file($_FILES[$video]['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
}

$sql = "INSERT INTO videos (categoria, titulo, descricao, dir, ext)
VALUES ('$categoria', '$titulo', '$descricao', '$dir', '$ext')";

if ($conn->query($sql) === TRUE) {
  echo "<script language='javascript' type='text/javascript'>
  alert('Video enviado');window.location
  .href='adm_videos.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>