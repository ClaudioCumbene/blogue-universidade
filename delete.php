<?php require "config/config.php";






if(isset($_GET['del_id'])){

  $id=$_GET['del_id'];

    $select= $conn->query("SELECT * FROM universidades WhERE id= '$id'");
    $select->execute();
    $post= $select->fetch(PDO::FETCH_OBJ);

    if($id!==$post->id){

     header("location: erro.php");
    }
   
    unlink("images/" . $post->img . "");

    $delete= $conn->prepare("DELETE FROM universidades WHERE id= :id");
    $delete->execute([
        ':id'=>$id
     ]);

     header("location: dashbord.php");

    }


     





?>



aqui