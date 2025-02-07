<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Contactos (Edição)</h1>      
    </div>    

    <!-- Tabela de Contactos -->
    <div class="col-auto m-auto text-center">
      <table>

        <tr class="text-center">
          <th>Morada</th>
          <th>Telefone</th> 
          <th>Email</th> 
          <th>Texto Facebook</th> 
          <th>Facebook</th> 
          <th>Editor</th> 
          <th>Data da Ultima Edição</th> 
          <th>Ações</th> 
        </tr>
       
          <tr>

            <td><?= $contacts["adress"]; ?></td>
            <td><?= $contacts["phonenumber"]; ?></td> 
            <td><?= $contacts["email"]; ?></td>   
            <td><?= $contacts["text_facebook"]; ?></td>             
            <td><?= $contacts["facebook"]; ?></td>            
            <td><?= getUserName($contacts["editor_id"])["name"]; ?></td>            
            <td><?= $contacts["edit_date"]; ?></td>  
            
            <!-- Botão de Editar -->
            <td>
              <a class="btn btn-primary" href="contacts_edit.php">Editar</a>  
            </td>
            
          </tr>
     
      </table>
    </div>
  </div>

</main>