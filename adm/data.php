<div class="container">
    <div class="center">
    <?php
    require 'php/connect.php';
    $vquery = 'SELECT * FROM `videos`';
    $vresult = $conn->query($vquery);
    $vrow = mysqli_num_rows($vresult);

    $iquery = 'SELECT * FROM `imagens`';
    $iresult = $conn->query($iquery);
    $irow = mysqli_num_rows($iresult);
    ?>
        <h1>Olá, aqui voce visualiza os dados do site</h1>
            <p>Voce possui <?php echo $vrow;?> videos</p>
            <p>Voce possui <?php echo $irow;?> fotos</p>
    </div>
</div>