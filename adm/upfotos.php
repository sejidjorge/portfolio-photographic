<div class="container">
    <div class="center">
        <h1>Painel de upload de fotos</h1>
        <p>Siga este passo a passo:</p>
        <ol>
            <li>1 - Selecione a categoria</li>
            <li>2 - Adicione o titulo</li>
            <li>3 - Adcione uma descrição de até 200 caracteres</li>
            <li>4 - Selecione a foto</li>
            <li>5 - Clique em enviar</li>
        </ol>
        <form action="uploadf.php" method="post" enctype="multipart/form-data">
        <select class="input" name="categoria" required>
        <option value="Casamento">Casamento</option>
        <option value="Corporativo">Corporativo</option>
        <option value="Festas">Festas</option>
        <option value="Editorial">Editorial</option>
        <option value="Fotojornalismo">Fotojornalismo</option>
        </select><br>
        <input class="input" type="text" name="titulo" placeholder="titulo da foto" required><br>
        <input class="input" type="text" name="descricao" placeholder="descrição da foto" required><br>
        <label for="foto">Selecione a foto</label>
        <input class="input" type="file" id="foto" name="foto" required>
        <input class="input" type="submit" value="ENVIAR"><br>
        </form>
    </div>
</div>