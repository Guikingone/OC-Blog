<?php
include 'inc/header.php';
?>
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
<?php
include 'inc/footer.php';
?>
