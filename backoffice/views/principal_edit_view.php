<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Editar Campos Principais</h1>
    </div>

    <?php if(!empty($home_page_info)): ?>

      <!-- Formulário de Edição dos Campos Página Principal -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center contactos-backoffice">
          
          <label for="title">Titulo Principal: </label>
          <input type="text" name="title" value="<?= $home_page_info["title"]; ?>" autofocus required>
          <br><br>          
          <label for="sub_title_1">Subtitulo 1: </label>
          <input type="text" name="sub_title_1" value="<?= $home_page_info["sub_title_1"]; ?>" required>
          <br><br>
          <label for="sub_title_2">Subtitulo 2: </label>
          <input type="text" name="sub_title_2" value="<?= $home_page_info["sub_title_2"]; ?>" required>
          <br><br> 
          <label for="home_text">Texto Principal: </label>
          <br>
          <textarea name="home_text" cols="100" rows="30" id="texto_principal"><?= $home_page_info["home_text"]; ?></textarea>
          
        </div>

        <!-- Botões de Editar/Voltar -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Editar</button>
          <a href="principal.php" class="btn btn-danger">Voltar</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensagem de Campos Página Principal Não Encontrados -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Campos Página Principal Não Encontrados!</h1>
      </div>

    <?php endif; ?>

  </div>

</main>