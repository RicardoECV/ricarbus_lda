<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Editar Serviço (<?= substr($unique_service["title"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($_GET["id"])): ?>

      <!-- Formulário de Edição do Serviço -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">

          <input type="hidden" name="id" value="<?= $unique_service["id"]; ?>">
          <label for="titulo">Título: </label>
          <input type="text" name="titulo" value="<?= $unique_service["title"]; ?>" autofocus required>
          <br><br>
          <label for="imagem">Imagem: </label>
          <input type="text" name="imagem" value="<?= $unique_service["img"]; ?>" required>
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">Gestor de Ficheiros</a>
          <br><br>
          <label for="texto">Texto: </label>
          <br>
          <textarea name="texto" cols="100" rows="5" id="texto_menu_simples"><?= $unique_service["card_text"]; ?></textarea>
        
        </div>

        <!-- Botões de Editar/Voltar -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Editar</button>
          <a href="services.php" class="btn btn-danger">Voltar</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensagem de Serviço Não Encontrado -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Serviço Não Encontrado!</h1>
      </div>

    <?php endif; ?>

  </div>

</main>