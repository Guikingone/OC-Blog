<?php
include 'inc/header.php';
?>
  <h1 class="centered">Derniers articles publiés :</h1>
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
          <em><a href="vue/blog/commentaires.php?billet=<?php echo $billet['id']; ?>">Commenter</a></em>
        </p>
      </div>
      <?php
      }
      ?>
<?php
include 'inc/footer.php';
?>
