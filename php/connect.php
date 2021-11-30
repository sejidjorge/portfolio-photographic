<?php

$conn = new mysqli('localhost', 'root', '','verissimo_db');

// Check connection
if ($conn->connect_error) {
  die("Conecção falhou" . $conn->connect_error);
}
?>