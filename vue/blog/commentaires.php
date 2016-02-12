<?php
include 'inc/header.php';
?>
<div class="container">
  <div clas="row">
    <div class="col-xs-12">
      <h2 class="centered"><a href="../../blog.php">Retour à l'accueil</a></h2>
        <!-- Formulaire d'ajout de commentaires -->
        <div class="formulaire">
          <p>
            <form method="post" action="../../modele/send_commentaires.php">
              <label>Votre Pseudo :
                <input type="text" name="auteur" />
              </label>
              <label>Votre email :
                <input type="email" name="email" />
              </label>
              <label>Votre message :
                <textarea type="text" name="message"></textarea>
              </label>
              <label>
                <input type="submit" value="Soumettre" />
              </label>
            </form>
          </p>
        </div>
    </div>
  </div>
</div>
<?php
include 'inc/footer.php';
?>
