<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Valores (Edição)</h1>      
    </div>

    <!-- Tabela de Valores -->
    <div class="col-12 text-center">
      <table class="m-auto">

        <tr class="text-center">     

          <th>Imagem</th>
          <th>Título</th>                             
          <th>Editor</th>            
          <th>Data da Ultima Edição</th>          
          <th>Ações</th>  

        </tr>


        <?php foreach($valors as $v): ?>
          <tr>            
            
            <td><img src="<?= $v["img"]; ?>" alt="<?= $d["imagem"]; ?>"></td>
            <td><?= $v["title"]; ?></td>  
            <td><?= getUserName($v["editor_id"])["name"]; ?></td> 
            <td><?= $v["edit_date"]; ?></td>    
            
            <!-- Botões de Editar -->
            <td>
              <a class="btn btn-primary" href="valor_edit.php?id=<?= $v["id"]; ?>">Editar</a> 
            </td>
            
          </tr>
        <?php endforeach; ?>

      </table>
    </div>
  </div>

</main>