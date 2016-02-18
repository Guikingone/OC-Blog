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
              <em><a href="commentaires.php?billet=<?php echo $billet['id']; ?>">Commenter</a></em>
            </p>
          </div>
          <?php
          }
          ?>
    </div>
  </div>
  <br/>
  <div class="row">
    <div class="col-lg-12 text-center">
      <?php
      if(isset($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $nbPages){
        $cPage = $_GET['page'];
      }else{
        $cPage = 0;
      }

      for($i = 0; $i<=$nbPages; $i++)
      {
        if($i === $cPage){
          echo $i;
        }else{
          echo '<a href="index.php?page=$i"' . $i . '</a>';
        }
      }
      ?>
    </div>
  </div>
</div>
<?php
include 'inc/footer.php';
?>
