<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center">
      <h1 class="p-3">Serviços (Edição)</h1>      
    </div>  

    <!-- Tabela de Serviços -->
    <div class="col-12">
      <table>

        <tr class="text-center">     

          <th>Imagem</th>
          <th>Título</th>
          <th>Texto</th>                       
          <th>Editor</th>            
          <th>Data da Ultima Edição</th>          
          <th>Ações</th>  

        </tr>

        <?php foreach($services as $s): ?>
          <tr>

            <td><img src="<?= $s["img"]; ?>" alt="<?= $s["img"]; ?>"></td>
            <td><?= $s["title"]; ?></td>
            <td><?= substr(strip_tags($s["card_text"]),0 , 500); ?>...</td>
            <td><?= getUserName($s["editor_id"])["name"]; ?></td> 
            <td><?= $s["edit_date"]; ?></td>     
            
            <!-- Botões de Editar/Apagar -->
            <td>
              <a class="btn btn-primary" href="service_edit.php?id=<?= $s["id"]; ?>">Editar</a>   
              <br><br>   
            </td>
            
          </tr>
        <?php endforeach; ?>

      </table>
    </div>

  </div>

</main>