<?php $title = $post['titre'] ?>

<?php ob_start() ?>
    <h1><?php echo $post['titre'] ?></h1>

    <div class="date"><?php echo $post['date_creation'] ?></div>
    <div class="body">
        <?php echo $post['contenu'] ?>
    </div>
<?php $content = ob_get_clean() ?>

<?php include 'layout/layout.php' ?>
