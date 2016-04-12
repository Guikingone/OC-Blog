<?php
include ('inc/header.php');
?>
<div class="container">
  <div clas="row">
    <div class="col-xs-12">
      <p class="text-center"><a href="blog.php" class="btn btn-success">Retour à l'accueil</a></p>
      <br/>
      <h3 class="text-center"><?php echo $billets['titre']; ?> <em>par <?php echo $billets['auteur']; ?></em></h3>
      <hr />
      <p class="text-center"><?php echo $billets['contenu']; ?></p>
      <br/>
      <hr />
      <h3 class="text-center">Les commentaires :</h3>
      <?php
      foreach($commentaires as $commentaire){
        ?>
          <p class="text-center"><?php echo $commentaire['contenu']; ?></p>
          <h4 class="text-center">Par <?php echo $commentaire['auteur']; ?></p>
        <?php
        }
      ?>
      <h2 class="text-center">Ajouter un commentaire :</h2>
        <!-- Formulaire d'ajout de commentaires -->
        <?php
          if(isset($_POST['submit'])){
            $name = htmlspecialchars(trim($_POST['auteur']));
            $email = htmlspecialchars(trim($_POST['email']));
            $contenu = htmlspecialchars(trim($_POST['message']));
            $errors = [];

            if(empty($name) || empty($email) || empty($contenu)){
              $errors['empty'] = "Tout les champs n'ont pas été remplis !";
            }else{
              comment($name, $email, $message);
            }
          }
        ?>
        <div class="well">
            <form method="post">
                <div class="form-group">
                <label>Votre Pseudo :</label>
                  <input type="text" name="auteur" class="form-control" id="auteur" />
                </div>
                <div class="form-group">
                <label>Votre email :</label>
                  <input type="email" name="email" class="form-control" id="email" />
                </div>
                <div class="form-group">
                <label>Votre message :</label>
                  <textarea type="text" name="message" class="form-control" id="message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Commenter" class="btn btn-danger" />
                  <input type="reset" value="Annuler" class="btn btn-warning" />
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
<?php
include ('inc/footer.php');
?>
