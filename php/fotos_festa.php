<div class="row1">
<?php
require 'php/connect.php';

$total_reg = "20";
  
if( isset( $_GET['pagina'] ) && (int)$_GET['pagina'] >= 0){
   $pagina = (int)$_GET['pagina'];
}else{
   $pagina = 0;
}
$pg = $pagina;

$offset = $total_reg * $pagina;

$query = 'SELECT * FROM `imagens` WHERE`categoria`= \'Festas\' LIMIT '.$total_reg.' OFFSET '.$offset;
$result = $conn->query($query);
$check = mysqli_num_rows($result);

$vquery = 'SELECT * FROM `imagens` WHERE`categoria`= \'Festas\'';
$vresult = $conn->query($vquery);
$vrow = mysqli_num_rows($vresult);
$tp = $vrow / $total_reg; 

$queryresult = array();
while($row = $result->fetch_object()){

?>
	<div class="column1 <?php echo $row->categoria;?>">
		<div class="content">
			<img onclick="openModal();currentSlide(<?php echo $row->id;?>)" class="hover-shadow" src="<?php echo $row->dir,$row->titulo,$row->ext?>" alt="<?php echo $row->titulo; ?>" style="width:100%">
		</div>
	</div>
<?php } ?>
</div>
<div id="myModal" class="modal">

	<span class="close cursor" onclick="closeModal()">&times;</span>
	<div class="modal-content">
<?php
require 'php/connect.php';
$total_reg = "20";
  
if( isset( $_GET['pagina'] ) && (int)$_GET['pagina'] >= 0){
   $pagina = (int)$_GET['pagina'];
}else{
   $pagina = 0;
}
$pg = $pagina;

$offset = $total_reg * $pagina;

$query = 'SELECT * FROM `imagens` WHERE`categoria`= \'Festas\' LIMIT '.$total_reg.' OFFSET '.$offset;
$result = $conn->query($query);
$check = mysqli_num_rows($result);

$vquery = 'SELECT * FROM `imagens` WHERE`categoria`= \'Festas\'';
$vresult = $conn->query($vquery);
$vrow = mysqli_num_rows($vresult);
$tp = $vrow / $total_reg; 

$queryresult = array();
while($row = $result->fetch_object()){
?>
	  <div class="mySlides">
		<img src="<?php echo $row->dir, $row->titulo, $row->ext;?>" alt="<?php echo $row->titulo; ?>" style="width:100%">
	  </div>
<?php } ?>
	  <!-- Next/previous controls -->
	  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
	  <!-- Caption text -->
	  <div class="caption-container">
		<p id="caption"></p>
	  </div>
  
	  <!-- Thumbnail image controls -->
<?php
require 'php/connect.php';
$total_reg = "20";
  
if( isset( $_GET['pagina'] ) && (int)$_GET['pagina'] >= 0){
   $pagina = (int)$_GET['pagina'];
}else{
   $pagina = 0;
}
$pg = $pagina;

$offset = $total_reg * $pagina;

$query = 'SELECT * FROM `imagens` WHERE`categoria`= \'Festas\' LIMIT '.$total_reg.' OFFSET '.$offset;
$result = $conn->query($query);
$check = mysqli_num_rows($result);

$vquery = 'SELECT * FROM `imagens` WHERE`categoria`= \'Festas\'';
$vresult = $conn->query($vquery);
$vrow = mysqli_num_rows($vresult);
$tp = $vrow / $total_reg; 
	
$queryresult = array();
while($row = $result->fetch_object()){
?>
	  <div class="column">
		<img class="demo" src="<?php echo $row->dir, $row->titulo, $row->ext;?>" alt="<?php echo $row->titulo; ?>" onclick="currentSlide(<?php echo $row->id;?>)">
	  </div>
<?php } ?>	
  	</div>
  </div>
<div class="container menu">
<?php
if($pagina !== 0){
	?>
	<a class="btn" href="?pagina=<?php echo $pagina-1; ?>" style="float: left;">Página Anterior</a>
	<?php
	}
	?>
	<?php
	if($total_reg == $check){
	?>
	<a class="btn" href="?pagina=<?php echo $pagina+1; ?>" style="float: right;">Página Posterior</a>
	<?php
	}
	?>
</div>