<?php
function list_action()
{
    $posts = get_articles();
    require 'vue/blog/index.php';
}

function show_action($id)
{
    $post = get_articles_by_id($id);
    require 'vue/blog/show.php';
}
