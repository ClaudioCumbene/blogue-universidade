<?php 
     include_once("templates/header.php");
      require "config/config.php";
      require "estilo.php";
   
    
?>
    <?php


    if(isset($_POST['submit'])){

      if($_POST['nome']=="" OR $_POST['descricao']=="" OR $_POST['localizacao']=="" OR $_POST['cursos']==""){
        echo "campos obrigatorios";
        
      }else{

       $nome= $_POST['nome'];
       $descricao= $_POST['descricao'];
       $localizacao= $_POST['localizacao'];      
       $cursos= $_POST['cursos']; 
       $img= $_FILES['img']['name'];
    

       $dir = 'images/' . basename($img);


      $insert= $conn->prepare("INSERT INTO universidades (nome, descricao,localizacao,cursos, img) VALUES( :nome, :descricao, :localizacao,:cursos,:img)");

      $insert->execute([
        'nome'=>$nome,
        'descricao'=> $descricao,
        'localizacao'=> $localizacao,
        'cursos'=> $cursos,
        'img'=> $img,
      ]);

      

      if(move_uploaded_file($_FILES['img']['tmp_name'], $dir)){

        header("location: index.php");
          
        }

    }
  }
           
    ?>
        
        <div class="container">

        <h1>Registo de Dados da Universidade</h1>

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

