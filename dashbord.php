<?php
  include_once("templates/header.php");
  require "config/config.php";
  require "estilo.php";

  $posts= $conn->query("SELECT * FROM universidades");
  $posts->execute();
  $post= $posts->fetchAll(PDO::FETCH_OBJ);




?>





<div class="container">
        <h1>Painel do Administrador</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome da Universidade</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <?php foreach($post as $pos): ?>
            <tbody>
           
                <tr>
                    <td><?= $pos->nome ?></td>
                    <td><?= $pos->descricao ?></td>
                    <td>
                    
                    <a href="update.php?upd_id=<?=$pos->id?>"><button style="background-color: green;" >Atualizar</button></a> 
                    <a href="delete.php?del_id=<?=$pos->id?>"><button>Eliminar</button></a>
                </td>
                </tr>
              
               
            </tbody>
            <?php endforeach; ?>
        </table>
    <p>Cadastrar Novo         <a href="insert.php"><button style="background-color: #0dcaf0;">Cadastrar</button></a></p>    

    </div>

    
    
  <tbody>

<br>
<br>
<br>
<br>
<br>
<br>
   
<?php 
   include_once("templates/footer.php");
?>
