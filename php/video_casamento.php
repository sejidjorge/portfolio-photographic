
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

$query = 'SELECT * FROM `videos` WHERE `categoria`= \'Casamento\' ORDER BY `id` ASC LIMIT '.$total_reg.' OFFSET '.$offset;
$result = $conn->query($query);
$check = mysqli_num_rows($result);

$vquery = 'SELECT * FROM `videos` WHERE `categoria`= \'Casamento\'';
$vresult = $conn->query($vquery);
$vrow = mysqli_num_rows($vresult);
$tp = $vrow / $total_reg; 

$queryresult = array();
while($row = $result->fetch_object()){

?>
	<div class="column1 <?php echo $row->categoria;?>">
		<div class="content">
        <video controls>
        <source class="hover-shadow" src="<?php echo $row->dir,$row->titulo,$row->ext?>" alt="<?php echo $row->titulo; ?>" style="width:100%">
		 </video>
        </div>
	</div>
<?php } ?>
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