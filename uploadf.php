<?php

require 'php/connect.php';

$foto = 'foto';
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$dir = 'galery/';

if(isset($_FILES['foto']))
{
   $ext = strtolower(substr($_FILES[$foto]['name'],-4)); //Pegando extensão do arquivo
   $new_name = $titulo . $ext; //Definindo um novo nome para o arquivo
   move_uploaded_file($_FILES[$foto]['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
}

$sql = "INSERT INTO imagens (categoria, titulo, descricao, dir, ext)
VALUES ('$categoria', '$titulo', '$descricao', '$dir', '$ext')";

if ($conn->query($sql) === TRUE) {
  echo "<script language='javascript' type='text/javascript'>
  alert('Foto enviada');window.location
  .href='adm_fotos.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>