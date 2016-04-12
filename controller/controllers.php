<?php
function list_action()
{
    $posts = get_all_posts();
    require 'vue/blog/index.php';
}

function show_action($id)
{
    $post = get_post_by_id($id);
    require 'vue/blog/show.php';
}
