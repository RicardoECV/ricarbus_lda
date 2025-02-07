<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Campos Principais (Edição)</h1>      
    </div>    

    <!-- Tabela de Campos Principais -->
    <div class="col-auto m-auto text-center">
      <table>

        <tr class="text-center">
          <th>Titulo</th>
          <th>Texto Principal</th> 
          <th>Subtitulo 1</th> 
          <th>Subtitulo 2</th>            
          <th>Editor</th> 
          <th>Data da Ultima Edição</th> 
          <th>Ações</th> 
        </tr>
       
          <tr>

            <td><?= $home_page_info["title"]; ?></td>
            <td><?= $home_page_info["home_text"]; ?></td> 
            <td><?= $home_page_info["sub_title_1"]; ?></td>   
            <td><?= $home_page_info["sub_title_2"]; ?></td> 
            <td><?= getUserName($home_page_info["editor_id"])["name"]; ?></td>            
            <td><?= $home_page_info["edit_date"]; ?></td>  
            
            <!-- Botão de Editar -->
            <td>
              <a class="btn btn-primary" href="principal_edit.php">Editar</a>  
            </td>
            
          </tr>
     
      </table>
    </div>
  </div>

</main>