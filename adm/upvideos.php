<div class="container">
    <div class="center">
    <h1>Painel de upload de videos</h1>
    <p>Siga este passo a passo:</p>
    <ol>
        <li>1 - Selecione a categoria</li>
        <li>2 - Adicione o titulo</li>
        <li>3 - Adcione uma descrição de até 200 caracteres</li>
        <li>4 - Selecione o video</li>
        <li>5 - Clique em enviar</li>
    </ol>
    <form action="uploadv.php" method="post" enctype="multipart/form-data">
    <select class="input" name="categoria" required>
    <option value="Casamento">Casamento</option>
    <option value="Corporativo">Corporativo</option>
    <option value="Variedades">Variedades</option>
    </select><br>
    <input class="input" type="text" name="titulo" placeholder="titulo do Video" required><br>
    <input class="input" type="text" name="descricao" placeholder="descrição do video" required><br>
    <label for="video">Selecione o video</label>
    <input class="input" type="file" id="video" name="video" required>
    <input class="input" type="submit" value="ENVIAR"><br>
    </form>
    </div>
</div>