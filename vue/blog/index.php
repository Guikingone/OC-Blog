<?php
include 'inc/header.php';
?>
<div class="container">
  <div clas="row">
    <div class="col-xs-12">
      <h1 class="text-center">Derniers articles publiés :</h1>
        <?php
        foreach($billets as $billet){
          ?>
          <div class="articles">
            <h3 class="text-center titre">
              <?php echo $billet['titre']; ?>
              <br/>
              <em>Le <?php echo $billet['date_creation']; ?></em>
            </h3>
            <!-- Affichage du contenu -->
            <p class="contenu"><?php echo $billet['contenu']; ?>
            <br />
              <em><a href="commentaires.php?billet=<?php echo $billet['id']; ?>" class="btn btn-primary">Commenter</a></em>
            </p>
          </div>
          <?php
          }
          ?>
    </div>
  </div>
  <br />
  <div class="row">
    <div class="col-lg-12 text-center">
      <!-- On boucle afin que l'affichage se fasse via des liens -->
      <?php
      for($i = 1; $i <= $pagesTotale; $i++)
      {
        if($i === $pageCourante){
          echo $i;
        }else{
          echo '<a href="?page=' . $i . '">' . $i .'</a>';
        }
      }
      ?>
    </div>
  </div>
</div>
<?php
include 'inc/footer.php';
?>
