
<?php
require "config/config.php";
 require "estilo.php";
  include_once("templates/header.php");

  
  
  $posts= $conn->query("SELECT * FROM universidades");
  $posts->execute();
  $post= $posts->fetchAll(PDO::FETCH_OBJ);



?> 
  
  
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets/css/variables.css">
  <link rel="stylesheet" href="assets/css/elements.css">
  <link rel="stylesheet" href="assets/css/classes.css">
  <link rel="stylesheet" href="assets/css/menu.css">
  <link rel="stylesheet" href="assets/css/styles.css">






  <section id="gallery" class="grid-one white-bg section">
    <div class="main-content grid-one-content">
      <h2 class="grid-main-heading">Universidades</h2>
      <p class="grid-description">Uma breve descrição.</p>

      <div class="grid">
           </article>
           <?php foreach($post as $pos): ?>
        <div class="gallery-img">
          <h1><?= $pos->nome?></h1>
          <p><?= $pos->descricao?></p>
          <img src="images/<?=$pos->img?>" />
         
        </div>
        <?php endforeach;?>
        </div>
    </div>
  </section>



 <br>
 <br>
 <br>
 <br><br><br>



<?php
  include_once("templates/footer.php");
?>