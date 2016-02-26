<?php
include '../inc/header.php';
?>
<div class="container">
  <div class="col-lg-12">
    <h3 class="text-center">Ajouter un article</h3>
    <div class="row">
      <div class="col-lg-12">
        <!-- Formulaire d'ajout d'article -->
        <form method="post" action="#">
          <div class="form-group">
            <label>Nom de l'auteur :</label>
              <input type="text" name="auteur" class="form-control" />
          </div>
          <div class="form-group">
            <label>Contenu :</label>
              <textarea type="text" name="contenu" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Ajouter" class="btn btn-success" />
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h3 class="text-center">Liste des articles publiés</h3>
        <!-- Liste des articles présents en BDD -->
        <table class="table table-hover table-condensed">
          <thead>
            <tr>
              <th>Auteur</th>
              <th>Date Publication</th>
              <th>Contenu</th>
            <tr>
          </thead>
          <tr>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
include '../inc/footer.php';
?>
