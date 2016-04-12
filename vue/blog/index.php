<?php $title = "Mon premier blog" ?>
<?php ob_start() ?>
<div class="container">
  <div clas="row">
    <div class="col-xs-12">
      <h1 class="text-center">Derniers articles publiés :</h1>
      <?php ob_start() ?>
        <ul>
            <?php foreach ($posts as $post): ?>
            <li>
                <a href="/read?id=<?php echo $post['id'] ?>">
                    <?php echo $post['title'] ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
  </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include 'layout/layout.php' ?>
