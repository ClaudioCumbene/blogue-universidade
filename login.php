<?php
   include_once("templates/header.php");
    require "config/config.php";
    require "estilo.php";
?>

<?php


    if(isset($_POST['submit'])){

        if($_POST['email']=="" OR $_POST['password']=="" ){

            echo "preecha os campos vazios/ campo vazio";

        }else{
               
            $email= $_POST['email'];
            $password = $_POST['password'];

            $login = $conn->query("SELECT * FROM admin WHERE email= '$email'");
            $login->execute();
            $log= $login->fetch(PDO::FETCH_ASSOC);

            if($login->rowCount()>0){
                if($log['password']== $password){
                    
                       
                    header("location: dashbord.php");
                }else{
                   echo "preencha rodos os campos";
                }
            }else{

                echo "falha"; 
             }
           
        }
    }
?>

<div class="container">
    <h1>Faca o Login na plataforma</h1>

    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="nome">Email</label>
            <input type="text" id="nome" name="email" required>
        </div>
        <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="password" required>
        </div>
    
        <div class="button-container">
            <button type="submit" name="submit">Entrar</button>
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