<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Editar Contactos</h1>
    </div>

    <?php if(!empty($contacts)): ?>

      <!-- Formulário de Edição dos Contactos -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center contactos-backoffice">
          
          <label for="morada">Morada: </label>
          <input type="text" name="morada" value="<?= $contacts["adress"]; ?>" autofocus required>
          <br><br>
          <label for="telefone">Telemóvel: </label>
          <input type="text" name="telefone" value="<?= $contacts["phonenumber"]; ?>" required>
          <br><br>
          <label for="fax">Email: </label>
          <input type="text" name="email" value="<?= $contacts["email"]; ?>" required>
          <br><br>
          <label for="email">Texto Facebook: </label>
          <input type="text" name="text_facebook" value="<?= $contacts["text_facebook"]; ?>" required>
          <br><br>
          <label for="facebook">Facebook: </label>
          <input type="text" name="facebook" value="<?= $contacts["facebook"]; ?>" required>
          <br><br>
        
        </div>

        <!-- Botões de Editar/Voltar -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Editar</button>
          <a href="contacts.php" class="btn btn-danger">Voltar</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensagem de Contactos Não Encontrados -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Contactos Não Encontrados!</h1>
      </div>

    <?php endif; ?>

  </div>

</main>