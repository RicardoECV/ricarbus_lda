<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Editar Valor (<?= substr($valor_unico["title"],0 , 45); ?>)</h1>
    </div>

    <?php if(!empty($_GET["id"])): ?>

      <!-- Formulário de Edição de um Valor -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">

          <input type="hidden" name="id" value="<?= $valor_unico["id"]; ?>">
          <label for="titulo">Título: </label>
          <input type="text" name="titulo" value="<?= $valor_unico["title"]; ?>" autofocus required>
          <br><br>
          <label for="imagem">Imagem: </label>
          <input type="text" name="imagem" value="<?= $valor_unico["img"]; ?>" required>
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">Gestor de Ficheiros</a>
          <br><br>
          
        </div>
        
        <!-- Botões de Editar/Voltar -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Editar</button>
          <a href="valors.php" class="btn btn-danger">Voltar</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensagem de Valor Não Encontrado -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Valor Não Encontrado!</h1>
      </div>

    <?php endif; ?>

  </div>

</main>