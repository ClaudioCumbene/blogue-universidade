
<?php
  include_once("templates/header.php");
  require "config/config.php";
  require "estilo.php";

?>




<?php
    if(isset($_GET['upd_id'])){

        $id= $_GET['upd_id'];

        $select= $conn->query("SELECT * FROM universidades WHERE id= '$id'");
        $select->execute();
        $posts= $select->fetch(PDO::FETCH_OBJ);

    
        if(isset($_POST['submit'])){

          if($_POST['nome']=="" OR $_POST['descricao']=="" OR $_POST['localizacao']=="" OR $_POST['cursos']==""){
            echo "campos obrigatorios";


            }else{
      

              unlink("images/" .$postag->img. "");

                  $nome= $_POST['nome'];
                  $descricao= $_POST['descricao'];
                  $localizacao= $_POST['localizacao'];      
                  $cursos= $_POST['cursos']; 
                  $img= $_FILES['img']['name'];
                

                  $dir = 'images/' . basename($img);       

            $update= $conn->prepare("UPDATE universidades SET nome = :nome, descricao = :descricao, localizacao = :localizacao, cursos = :cursos, img = :img, WHERE id= '$id'");

            $update->execute([
              'nome'=>$nome,
              'descricao'=> $descricao,
              'localizacao'=> $localizacao,
              'cursos'=> $cursos,
              'img'=> $img,
            ]);

             header("location: dashbord.php");
      
          }
        }




    }else{
      header('location: erro.php');
    }

?>
       
       <div class="container">

<h1>Actualizar de Dados da Universidade</h1>

<form action="insert.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea id="descricao" name="descricao" rows="4" required></textarea>
    </div>
    <div class="form-group">
        <label for="localizacao">Localização</label>
        <input type="text" id="localizacao" name="localizacao" required>
    </div>
    <div class="form-group" id="coursesContainer">
        <label>Cursos</label>
        <input type="text" name="cursos" required>
    </div>
   
    <div class="form-group">
        <label for="imagem">Imagem</label>
        <input type="file" id="imagem" name="img"  required>
    </div>
    <div class="button-container">
        <button type="submit" name="submit">Registrar</button>
    </div>
</form>
</div>

<br>
<br>
<br>
<br>
<br>
<br>


<?php
  include_once("templates/footer.php");
?>


           
       